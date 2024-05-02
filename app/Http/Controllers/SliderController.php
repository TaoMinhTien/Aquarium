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
use Carbon\Carbon;

class SliderController extends Controller
{
    //
    // public function slider()
    // {
    //     $events = Event::inRandomOrder()->limit(2)->get();
    //     $formattedEvents = [];
    //     $texts = [];
    //     $description = $events->description;
    //     $text = strip_tags($description);
    //     $imageUrls = [];
    //     preg_match_all('/src="([^"]+)"/', $description, $matches);
    //     $imageUrls = $matches[1];
    //     $imageFileNames = [];
    //     foreach ($imageUrls as $imageUrl) {
    //         $fileName = basename($imageUrl);
    //         $imageFileNames[] = $fileName;
    //     }
    //     $formattedEvent = [
    //         'newsRead' => $events,
    //         'text' => $text,
    //         'image_file_names' => $imageFileNames,
    //     ];

    //     return view('layout.slider_ticket_02', ['eventsSlider' => $events]);
    // }
}
