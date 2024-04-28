<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReadController extends Controller
{
    //
    public function newsRead($id)
    {
        $newsRead = Event::find($id);
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

        // dd($formattedEvent);
        return view('read-news.read-news', [
            'newsRead' => $formattedEvent,
        ]);
    }
}
