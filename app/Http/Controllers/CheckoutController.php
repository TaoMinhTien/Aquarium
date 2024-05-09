<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use App\Models\Ticket;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\OrderNumber;
use App\Models\TicketVariant;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class CheckoutController extends Controller
{
    //
    public function checkout()
    {
        $cartCheckout = Session::get('cart');
        $total = 0;
        $subtotal = 0;
        $discount = 0;
        if ($cartCheckout) {
            $cartQuantity = count($cartCheckout);
        } else {
            return redirect()->route('error');
        }
        foreach ($cartCheckout as $item) {
            $subtotal += $item['total_price'];
        }
        $total = $subtotal - $discount;
        return view('layout.checkout', [
            'cartCheckout' => $cartCheckout,
            'total' => $total,
            'subtotal' => $subtotal,
            'cartQuantity' => $cartQuantity,
        ]);
    }
    ///
    public function process(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{10}$/',
            'address' => 'required|string|max:255',
            'note' => 'max:2000',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        function getTime()
        {
            $currentDateTime = Carbon::now();
            $currentDateTime->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i:s');

            return $currentDateTime;
        }
        function generateOrderNumber()
        {
            if (!Session::has('orderNumber')) {
                $randomDigits = Str::random(6);
                Session::put('orderNumber', $randomDigits);
                return  $randomDigits;
            } else {
                return Session::get('orderNumber');
            }
        }
        $time = getTime();
        $orderNumber = generateOrderNumber();
        $payment = $request->input('paymentmethod');
        switch ($payment) {
            case 'qr':
                $payment = 'Thanh toán bằng mã QR code';
                break;
            case 'meet':
                $payment = 'Thanh toán khi vào cổng';
                break;
            case 'bank':
                $payment = 'Chuyển khoản';
                break;
            default:
                break;
        }
        $cartCheckout = Session::get('cart');
        $total = 0;
        $subtotal = 0;
        $discount = 0;
        if ($cartCheckout) {
            $cartQuantity = count($cartCheckout);
        } else {
            $cartQuantity = 0;
        }
        foreach ($cartCheckout as $item) {
            $subtotal += $item['total_price'];
        }
        $total = $subtotal - $discount;
        $dataCheckout = [
            'payment' => $payment,
            'time' => $time,
            'total' => $total,
            'cartQuantity' => $cartQuantity,
            'orderNumber' => $orderNumber,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'notes' => $request->input('note'),
            'phone' => $request->input('phone'),
            'cartCheckout' => $cartCheckout,
        ];
        // dd($dataCheckout);
        Session::put('dataCheckout', $dataCheckout);
        $paymentName = $request->input('paymentmethod');
        if ($paymentName) {
            return view( 'payment.bank', $dataCheckout);
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid payment method'])->withInput();
        }
    }
    ///
    public function handleCheckout(Request $request)
    {
        try {
            DB::beginTransaction();
            $cartCheckout = Session::get('cart');
            $dataCheckout = Session::get('dataCheckout');
            if (!$dataCheckout || !$cartCheckout) {
                return redirect()->route('error');
            }
            foreach ($cartCheckout as $item) {
                $ticket =  Ticket::find($item['ticket_id']);
                $event = Event::find($item['event_id']);
                if (
                    $ticket->quantity < $item['quantity']
                    || $event->status != 'Active'

                ) {
                    return redirect()->route('error');
                }
            }

            $payment = Payment::firstOrCreate(['name' => $dataCheckout['payment']]);
            $orderNumber = new OrderNumber();
            $orderNumber->order_number = $dataCheckout['orderNumber'];
            $orderNumber->save();
            $customer = Customer::where('email', $dataCheckout['email'])->first();
            if ($customer) {
                $customer->increment('purchase_count');
            } else {
                $data = [
                    'name' => $dataCheckout['name'],
                    'email' =>  $dataCheckout['email'],
                    'address' => $dataCheckout['address'],
                    'phone' => $dataCheckout['phone'],
                    'purchase_count' => 1,
                ];
                if (isset($dataCheckout['notes']) && !empty($dataCheckout['notes'])) {
                    $data['notes'] = $dataCheckout['notes'];
                }
                $customer = Customer::create($data);
            }
            foreach ($dataCheckout['cartCheckout'] as $item) {
                $booking = new Booking();
                $booking->customer_id = $customer->id;
                $booking->ticket_id = $item['ticket_id'];
                $booking->event_id = $item['event_id'];
                $booking->payment_id = $payment->id;
                $booking->order_number_id = $orderNumber->id;
                $booking->quantity = $item['quantity'];
                $booking->order_date = $dataCheckout['time'];
                $booking->notes = $dataCheckout['notes'];
                $booking->status =  $dataCheckout['status'] ?? 'pending';
                $booking->totalmount = $dataCheckout['total'];
                $booking->save();
            }
            function checkoutSuccess()
            {
                $dataCheckout = Session::get('dataCheckout');
                foreach ($dataCheckout['cartCheckout'] as $item) {
                    $ticket = Ticket::find($item['ticket_id']);
                    if ($ticket) {
                        $oldQuantity = $ticket->quantity;
                        $quantityBought = $item['quantity'];
                        $newQuantity = $oldQuantity - $quantityBought;
                        $ticket->update(['quantity' => $newQuantity]);
                    }

                    $eventsToUpdate = Event::whereHas('tickets', function ($query) {
                        $query->where('quantity', 0);
                    })->get();
                    foreach ($eventsToUpdate as $event) {
                        if ($event->status !== 'Cancelled') {
                            $event->update(['status' => 'Cancelled']);
                        }
                    }
                }
            }

            checkoutSuccess();

            $orderTime = $dataCheckout['time'];
            $orderNumber = $dataCheckout['orderNumber'];
            $payment = $dataCheckout['payment'];
            $orderTotal = $dataCheckout['cartQuantity'];
            $totalPrice = $dataCheckout['total'];
            // dd($orderNumber, $dataCheckout);

            // $sendMail = new SendMailController();
            // $sendMail->sendMail(
            //     $cartCheckout,
            //     $dataCheckout,
            //     $orderTime,
            //     $orderNumber,
            //     $payment,
            //     $orderTotal,
            //     $totalPrice,
            // );
            // DB::commit();
            // Session::forget('cart');
            // Session::forget('dataCheckout');
            // Session::forget('orderNumber');
            return view('layout.thankyou');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('error')->withErrors([$e->getMessage()])->withInput();
        };
    }
}
