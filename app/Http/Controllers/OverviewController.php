<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OverviewController extends Controller
{
    //
    public function index()
    {
        return view('layout.Overview');
    }
}
    ?>
<?php

namespace App\Http\Controllers;

use App\Models\Overview;
use App\Models\OverviewImage;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Overview::class, 'overview');
    }

    public function index()
    {
        $overviews = Overview::with('overviewImages')->paginate();

        return view('overview.index', compact('overviews'));
    }

    public function create()
    {
        return view('overview.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $overview = Overview::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('overview_images');
                OverviewImage::create([
                    'overview_id' => $overview->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.overviews.index')->with('success', 'Overview created successfully.');
    }

    public function edit(Overview $overview)
    {
        return view('overview.edit', compact('overview'));
    }

    public function update(Request $request, Overview $overview)
    {
        $this->authorize('update', $overview);

        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
        ]);

        $overview->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('overview_images');
                OverviewImage::create([
                    'overview_id' => $overview->id,
                    'image_url' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.overviews.index')->with('success', 'Overview updated successfully.');
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
