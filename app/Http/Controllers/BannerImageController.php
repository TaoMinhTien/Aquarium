<?php

namespace App\Http\Controllers;

use app\Models\BannerImage;
use app\Models\Banner;
use Illuminate\Http\Request;

class BannerImageController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(BannerImage::class, 'bannerImage');
    }

    public function addImages(Banner $banner, Request $request)
    {
        $this->authorize('create', BannerImage::class);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('banner_images');
                BannerImage::create([
                    'banner_id' => $banner->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.banners.index')->with('success', 'Banner images added successfully.');
    }

    public function deleteImages(BannerImage $bannerImage)
    {
        $this->authorize('delete', $bannerImage);

        $bannerImage->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}