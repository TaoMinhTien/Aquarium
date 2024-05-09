<?php

namespace App\Http\Controllers;

use App\Models\Overview;
use App\Models\OverviewImage;
use Illuminate\Http\Request;

class HomeOverviewImageController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(OverviewImage::class, 'overviewImage');
    }

    public function addImages(Overview $overview, Request $request)
    {
        $this->authorize('create', OverviewImage::class);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('overview_images');
                OverviewImage::create([
                    'overview_id' => $overview->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.overviews.index')->with('success', 'Overview images added successfully.');
    }

    public function deleteImages(OverviewImage $overviewImage)
    {
        $this->authorize('delete', $overviewImage);

        $overviewImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}