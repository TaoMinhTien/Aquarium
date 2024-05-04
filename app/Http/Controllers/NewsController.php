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

class NewsController extends Controller
{
    //
    public function News()
    {
        $tickets = Tickets::where('quantity', '>', 0)
        ->whereHas('event', function ($query) {
            $query->where('status', 'active');
        })
        ->inRandomOrder() 
        ->orderBy('quantity')
        ->take(3)
        ->get();
        return view('news.news', [
            'tickets' => $tickets,
        ]);
    }
    //
    public function getNews(Request $request)
    {
        $perPage = $request->input('per_page', 5); 
        $page = $request->input('page', 1);
        $events = Event::with('ticketVariants.ticket')
            ->where('status', 'Active')
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();
        $tickets = Tickets::where('quantity', '>', 0)
            ->orderBy('quantity')
            ->take(3)
            ->get();
        $formattedEvents = [];
        foreach ($events as $event) {
            $description = $event->description;
            $text = strip_tags($description);
            $text = substr($text, 0, 600);
            $imageUrls = [];
            preg_match_all('/src="([^"]+)"/', $description, $matches);
            $imageUrls = $matches[1];
            $imageFileNames = [];

            foreach ($imageUrls as $imageUrl) {
                $fileName = basename($imageUrl);
                $imageFileNames[] = $fileName;
            }

            $tickets = $event->ticketVariants->pluck('ticket');
            $formattedEvent = [
                'event' => $event,
                'text' => $text,
                'image_file_names' => $imageFileNames,
                'tickets' => $tickets,
            ];

            $formattedEvents[] = $formattedEvent;
        }
        return response()->json([
            'formattedEvents' => $formattedEvents,
        ]);
    }
    ///

    public function handleEditNews(Request $request)
    {
        // dd($request);
        try {
            $validator = Validator::make($request->all(), [
                'title_name' => 'required|string|max:255',
                'audience' => 'required|string|max:255',
                'editor' => 'required|string',
                'quantity' => 'required|numeric|min:0',
                'price' => 'required|numeric|min:0',
                'start_datetime' => 'nullable|date',
                'end_datetime' => 'nullable|date|after:start_datetime',
                'status' => 'nullable|string|max:255',
                'address' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $event = Event::findOrFail($request->input('id', null)) ?? new Event();
            $event->name_event = $request->title_name;
            $event->audience = $request->audience;
            $event->description = $request->editor;
            $event->start_date = $request->start_datetime ? Carbon::parse($request->start_datetime)->format('Y-m-d H:i:s') : null;
            $event->end_date = $request->end_datetime ? Carbon::parse($request->end_datetime)->format('Y-m-d H:i:s') : null;
            $event->status = $request->status;
            $event->address = $request->address;
            $event->save();
            $tickets = Ticket::where('event_id', $event->id)->first();
            if ($tickets) {
                $tickets->update([
                    'quantity' => $request->quantity,
                    'price' => $request->price,
                ]);
            } else {
                $updatedEvent = Event::findOrFail($event->id);
                $description = $updatedEvent->description;
                preg_match('/src="([^"]+)"/', $description, $matches);
                $imageUrl = $matches[1] ?? null;
                $imageFileName = basename($imageUrl);
                $tickets = new Ticket();
                $tickets->event_id = $updatedEvent->id;
                $tickets->name = $request->title_name;
                $tickets->quantity = $request->quantity;
                $tickets->price = $request->price;
                $tickets->image = $imageFileName;
                $tickets->save();
            }
            DB::commit();
            return redirect()->back()->with('success', 'News update successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while update the news.');
        }
    }
    //
    public function uploadNews()
    {
        return view('news.upload', []);
    }
    //
    public function deleteNews($id)
    {
        $events = Event::find($id);
        if (!$events) {
            return redirect()->back()->with('error', 'events not found.');
        }
        $events->delete();
        return redirect()->back()->with('success', 'events deleted successfully.');
    }
    //
    public function updateNews()
    {
        $events = Event::all();
        foreach ($events as $event) {
            $description = $event->description;
            $imageUrls = [];
            preg_match_all('/src="([^"]+)"/', $description, $matches);
            $imageUrls = $matches[1];
            $imageFileNames = [];
            foreach ($imageUrls as $imageUrl) {
                $fileName = Str::afterLast($imageUrl, '/');
                $imageFileNames[] = $fileName;
            }
            $event->image_file_names = $imageFileNames;
        }
        // dd($event);
        return view('news.news_all', [
            'events' => $events,
        ]);
    }
    ///
    public function editNews($id)
    {
        $events = Event::find($id);
        $tickets = $events->tickets;
        $description = $events->description;
        $imageUrls = [];
        preg_match_all('/src="([^"]+)"/', $description, $matches);
        $imageUrls = $matches[1];
        $imageFileNames = [];
        foreach ($imageUrls as $imageUrl) {
            $fileName = Str::afterLast($imageUrl, '/');
            $imageFileNames[] = $fileName;
        }
        $events->image_file_names = $imageFileNames;
        // dd($tickets);
        return view('news.edit', [
            'eventEdit' => $events,
            'ticketEdit' => $tickets
        ]);
    }
    //
    public function handleUploadNews(Request $request)
    {
        try {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('news_img'), $fileName);
                $url = asset('news_img/' . $fileName);
                return response()->json([
                    'url' => $url,
                    'uploaded' => 1,
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'uploaded' => false,
                'error' => $e->getMessage()
            ]);
        }
    }
    //
    public function newsHandle(Request $request)
    {
        // dd($request);
        try {
            $validator = Validator::make($request->all(), [
                'title_name' => 'required|string|max:255',
                'audience' => 'required|string|max:255',
                'editor' => 'required|string',
                'quantity' => 'required|numeric|min:0',
                'price' => 'required|numeric|min:0',
                'start_datetime' => 'nullable|date',
                'end_datetime' => 'nullable|date|after:start_datetime',
                'status' => 'nullable|string|max:255',
                'address' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            DB::beginTransaction();
            $event = new Event();
            $event->name_event = $request->title_name;
            $event->audience = $request->audience;
            $event->description = $request->editor;
            $event->start_date = $request->start_datetime ? Carbon::parse($request->start_datetime)->format('Y-m-d H:i:s') : null;
            $event->end_date = $request->end_datetime ? Carbon::parse($request->end_datetime)->format('Y-m-d H:i:s') : null;
            $event->status = $request->status;
            $event->address = $request->address;
            $event->save();

            $event = Event::latest()->first();
            $description = $event->description;
            preg_match('/src="([^"]+)"/', $description, $matches);
            $imageUrl = $matches[1] ?? null;
            $imageFileName = basename($imageUrl);
            $ticket = new Ticket();
            $ticket->event_id = $event->id;
            $ticket->name = $event->name_event;
            $ticket->quantity = $request->quantity;
            $ticket->price = $request->price;
            $ticket->image = $imageFileName;
            $ticket->save();
            $TicketVariant = new TicketVariant();
            $TicketVariant->event_id = $event->id;
            $TicketVariant->ticket_id = $ticket->id;
            $TicketVariant->save();
            DB::commit();
            return redirect()->back()->with('success', 'News uploaded successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while uploading the product.');
        }
    }

    //
}
