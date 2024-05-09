<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TicketVariant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;




class BillController extends Controller
{
    //
    public function view()
    {
        $bookings = Booking::with(['customer', 'ticket', 'event', 'orderNumber', 'payment'])->paginate(10);;
        return view('bill.bill', ['bookings' => $bookings]);
    }
    ///
    public function filter(Request $request)
    {
        $statuses = $request->input('status', []);
        $orderNumber = $request->input('order_number');

        $query = Booking::with(['customer', 'ticket', 'event', 'orderNumber', 'payment']);
        if (!empty($statuses)) {
            $query->whereIn('status', $statuses);
        }
        if (!empty($orderNumber)) {
            $query->whereHas('orderNumber', function ($query) use ($orderNumber) {
                $query->where('order_number', 'like', '%' . $orderNumber . '%');
            });
        }
        // Retrieve paginated bookings
        $bookings = $query->get();

        return response()->json([
            'success' => true,
            'bookings' => $bookings,
        ]);
    }




    ///
    public function bookingDetail($id)
    {
        $booking = Booking::with(['customer', 'ticket', 'event', 'orderNumber', 'payment'])
            ->where('id', $id)
            ->first();

        return view('bill.detail', ['booking' => $booking]);
    }
    ////
    public function detailConfirm($id, Request $request)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            $booking = Booking::with(['customer', 'ticket', 'event', 'orderNumber', 'payment'])
                ->where('id', $id)
                ->first();
            if ($booking && $request->input('confirm')) {
                $booking->update(['status' => 'confirmed']);
                DB::commit();
                return redirect()->back();
            } else {
                return redirect()->route('error');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('error')->withErrors([$e->getMessage()])->withInput();
        }
    }
}
