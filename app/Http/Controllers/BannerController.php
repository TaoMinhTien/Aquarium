<?php
namespace App\Http\Controllers;

use app\Models\Banner;
use app\Models\BannerImage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Banner::class, 'banner');
    }

    public function index()
    {
        $banners = Banner::with('bannerImages')->paginate();

        return view('banner.index', compact('banners'));
    }

    public function create()
    {
        return view('banner.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $banner = Banner::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('banner_images');
                BannerImage::create([
                    'banner_id' => $banner->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.banners.index')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $this->authorize('update', $banner);

        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $banner->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('banner_images');
                BannerImage::create([
                    'banner_id' => $banner->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $this->authorize('delete', $banner);

        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Banner deleted successfully.');
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