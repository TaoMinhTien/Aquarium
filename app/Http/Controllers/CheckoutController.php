<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use App\Models\Ticket;
use App\Models\Customer;
use App\Models\TicketVariant;
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
            $cartQuantity = 0;
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
        $paymentName = $request->input('paymentmethod');
        if ($paymentName) {
            return view("payment.$paymentName", $dataCheckout);
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid payment method'])->withInput();
        }
    }
    ///
    public function handleCheckout(Request $request)
    {
        dd($request);
    }
}
