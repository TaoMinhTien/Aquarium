<?php

namespace App\Http\Controllers;

use app\Models\AboutUs;
use app\Models\AboutUsImage;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(AboutUs::class, 'aboutUs');
    }

    public function index()
    {
        $aboutUs = AboutUs::with('aboutUsImages')->first();

        return view('about_us.index', compact('aboutUs'));
    }

    public function create()
    {
        return view('about_us.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $aboutUs = AboutUs::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('about_us_images');
                AboutUsImage::create([
                    'about_us_id' => $aboutUs->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.about_us.index')->with('success', 'About Us created successfully.');
    }

    public function edit(AboutUs $aboutUs)
    {
        return view('about_us.edit', compact('aboutUs'));
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        $this->authorize('update', $aboutUs);

        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $aboutUs->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('about_us_images');
                AboutUsImage::create([
                    'about_us_id' => $aboutUs->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.about_us.index')->with('success', 'About Us updated successfully.');
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
