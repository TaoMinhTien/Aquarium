<?php

namespace App\Http\Controllers;

use app\Models\InformationImage;
use app\Models\Information;
use Illuminate\Http\Request;

class BannerImageController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(InformationImage::class, 'bannerImage');
    }

    public function addImages(Information $information, Request $request)
    {
        $this->authorize('create', InformationImage::class);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('banner_images');
                InformationImage::create([
                    'banner_id' => $information->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.information.index')->with('success', 'Information images added successfully.');
    }

    public function deleteImages(InformationImage $informationImage)
    {
        $this->authorize('delete', $informationImage);

        $informationImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
