<?php
namespace App\Http\Controllers;


use App\Models\Information;
use App\Models\InformationImage;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Information::class, 'information');
    }

    public function index()
    {
        $informations = Information::with('informationImages')->paginate();

        return view('information.index', compact('informations'));
    }

    public function create()
    {
        return view('information.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $information = Information::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('information_images');
                InformationImage::create([
                    'information_id' => $information->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.informations.index')->with('success', 'Information created successfully.');
    }

    public function edit(Information $information)
    {
        return view('information.edit', compact('information'));
    }

    public function update(Request $request, Information $information)
    {
        $this->authorize('update', $information);

        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $information->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('information_images');
                InformationImage::create([
                    'information_id' => $information->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.informations.index')->with('success', 'Information updated successfully.');
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

   

