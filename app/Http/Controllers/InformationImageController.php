<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\InformationImage;
use Illuminate\Http\Request;

class InformationImageController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(InformationImage::class, 'informationImage');
    }

    public function addImages(Information $information, Request $request)
    {
        $this->authorize('create', InformationImage::class);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('information_images');
                InformationImage::create([
                    'information_id' => $information->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.informations.index')->with('success', 'Information images added successfully.');
    }

    public function deleteImages(InformationImage $informationImage)
    {
        $this->authorize('delete', $informationImage);

        $informationImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
