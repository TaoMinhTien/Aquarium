<?php

namespace App\Http\Controllers;

use app\Models\AboutUs;
use app\Models\AboutUsImage;
use Illuminate\Http\Request;

class AboutUsImageController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(AboutUsImage::class, 'aboutUsImage');
    }

    public function addImages(AboutUs $aboutUs, Request $request)
    {
        $this->authorize('create', AboutUsImage::class);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('about_us_images');
                AboutUsImage::create([
                    'about_us_id' => $aboutUs->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.about_us.index')->with('success', 'About Us images added successfully.');
    }

    public function deleteImages(AboutUsImage $aboutUsImage)
    {
        $this->authorize('delete', $aboutUsImage);

        $aboutUsImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}