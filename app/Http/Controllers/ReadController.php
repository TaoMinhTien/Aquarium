<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\TicketVariant;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReadController extends Controller
{
    //
    public function newsRead($id)
    {
        if ($id) {
            $newsRead = Event::find($id);
            if (!$newsRead) {
                return redirect()->route('error')->with('message', 'Event not found');
            }
            $event_id = $newsRead->id;
            $ticketIds = TicketVariant::with('ticket')
                ->whereHas('ticket.event', function ($query) use ($event_id) {
                    $query->where('id', $event_id);
                })
                ->pluck('ticket_id')
                ->toArray();
        } 
        if (!$ticketIds) {
            return redirect()->route('error');
        }
        $ticket = Ticket::find($ticketIds);
        $formattedEvents = [];
        $texts = [];
        $description = $newsRead->description;
        $text = strip_tags($description);
        $imageUrls = [];
        preg_match_all('/src="([^"]+)"/', $description, $matches);
        $imageUrls = $matches[1];
        $imageFileNames = [];
        foreach ($imageUrls as $imageUrl) {
            $fileName = basename($imageUrl);
            $imageFileNames[] = $fileName;
        }
        $formattedEvent = [
            'newsRead' => $newsRead,
            'text' => $text,
            'image_file_names' => $imageFileNames,
        ];

        $formattedEvents[] = $formattedEvent;
        
        return view('read-news.read-news', [
            'newsRead' => $formattedEvent,
            'tickets' => $ticket,
        ]);
    }
  

}
