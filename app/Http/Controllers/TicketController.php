<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{


    //
    public function ticketview(){
        return view('layout.ticketview');
    }
    //
    public function BuyTicket(){
        return 'Handle Ticket';
    }
    //
    public function ticket(){
        return  view('layout.all_ticket');
    }
}
