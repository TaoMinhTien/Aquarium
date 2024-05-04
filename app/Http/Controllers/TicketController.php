<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Tickets;
use App\Models\TicketVariant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TicketController extends Controller
{


    //
    public function ticketview(Request $request)
    {
        $ticket = Ticket::find($request->ticket_id);
        $event = Event::find($request->event_id);
        if (!$ticket || !$event) {
            return redirect()->route('error');
        }

        $formattedEvents = [];
        $description = $event->description;
        $text = strip_tags($description);
        $text = substr($text, 0, 2300);
        $imageUrls = [];
        preg_match_all('/src="([^"]+)"/', $description, $matches);
        $imageUrls = $matches[1];
        $imageFileNames = [];

        foreach ($imageUrls as $imageUrl) {
            $fileName = basename($imageUrl);
            $imageFileNames[] = $fileName;
        }

        $formattedEvent = [
            'event' => $event,
            'text' => $text,
            'image_file_names' => $imageFileNames,
        ];

        $formattedEvents[] = $formattedEvent;
        return view('layout.ticketview', [
            'ticket' => $ticket,
            'event' => $event,
            'formattedEvents' => $formattedEvents,
        ]);
    }
    //
    public function BuyTicket()
    {
        return 'Handle Ticket';
    }
    //
    public function tickets(Request $request)
    {
        return view('layout.all_ticket');
    }
    //
    public function ticketsGet(Request $request)
    {
        $page = $request->input('page');
        $perPage = 12;
        $totalTickets = Tickets::count();
        $skip = ($page - 1) * $perPage;
        $tickets = Tickets::whereHas('event', function ($query) {
            $query->where('status', 'Active');
        })
            ->skip($skip)
            ->take($perPage)
            ->get();
        if (($skip + $perPage) >= $totalTickets) {
            $tickets = [];
        }
        return response()->json([
            'ticket' => $tickets,
            'page' => $page
        ]);
    }
    //
    public function checkStock(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $ticket = Ticket::find($ticketId);
        if ($ticket && $ticket->quantity > 0) {
            $quantity = $ticket->quantity;
            return response()->json([
                'status' => 'instock',
                'stock' => $quantity,
            ]);
        } else {
            return response()->json([
                'status' => 'outstock',
            ]);
        }
    }
}
