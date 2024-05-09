<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TicketVariant;
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
    public function bookingDetail(Request $request)
    {
        $id = $request->input('booking_id');
        $booking = Booking::with(['customer', 'ticket', 'event', 'orderNumber', 'payment'])
            ->where('id', $id)
            ->first();

        return view('bill.detail', ['booking' => $booking]);
    }
    ////
    public function detailConfirm(Request $request)
    {
       
        $id = $request->input('booking_id');
        $status = $request->input('status');
        $booking = Booking::with(['customer', 'ticket', 'event', 'orderNumber', 'payment'])
            ->where('id', $id)
            ->first();
        dd($booking,$status);
    }
}
