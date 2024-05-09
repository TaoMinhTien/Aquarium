<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //
    public function sendMail(
        $cartCheckout,
        $dataCheckout,
        $orderTime,
        $orderNumber,
        $payment,
        $orderTotal,
        $totalPrice,

    ) {
        $response = Mail::to($dataCheckout['email'])->send(new sendMail(
            $cartCheckout,
            $dataCheckout,
            $orderTime,
            $orderNumber,
            $payment,
            $orderTotal,
            $totalPrice,
        ));
    }
}
