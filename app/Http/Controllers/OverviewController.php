<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Overview;
use App\Models\OverviewImage;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class OverviewController extends Controller
{
    //
    public function create()
    {
        return view('overview.create');
    }
    // upload banner
    public function OverviewStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|max:150',
            'images.*' => 'required|image|max:4000',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            DB::beginTransaction();
            $overview = new Overview();
            $overview->title = $request->input('title');
            $overview->description  = $request->input('description');
            $overview->status = $request->input('status');
            if($overview->save()){
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $originName = $image->getClientOriginalName();
                        $fileName = pathinfo($originName, PATHINFO_FILENAME);
                        $extension = $image->getClientOriginalExtension();
                        $fileName = $fileName . '_' . time() . '.' . $extension;
                        $image->move(public_path('overview_image'), $fileName);
                        $url = asset('overview_image/' . $fileName);
                        $OverviewImage = new OverviewImage();
                        $OverviewImage->overview_id = $overview->id;
                        $OverviewImage->image_url = $fileName;
                        $OverviewImage->save();
                    }
                }
            }
           
            DB::commit();
            return redirect()->back()->with('success', 'Overview uploaded successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while uploading the Overview.');
        }
    }
    //
    public function deleteOverview($id)
    {
        try {
            $Overview = Overview::findOrFail($id);
            if ($Overview) {
                $Overview->delete();
            } else {
                return redirect()->back()->with('error', 'Overview not found!');
            }
            return redirect()->back()->with('success', 'Overview deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'error ' . $e->getMessage());
        }
    }
    ///  // Update banner
    public function edit()
    {
        $overview = Overview::all();
        return view('overview.edit', [
            'overview' => $overview
        ]);
    }
    ///
    public function handleUpdate($id)
    {
        $overview = Overview::find($id);
        $imgOverview = OverviewImage::where('banner_id', $overview -> id)->get();
        return view('overview.update', [
            'overview' => $overview,
            'imgOverview' => $imgOverview,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|max:150',
            'images.*' => 'required|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $uploadedImagesCount = count($request->file('images'));
        if ($uploadedImagesCount < 1 || $uploadedImagesCount > 1) {
            return redirect()->back()->with('error', 'You can only upload 1 pictures');

        }
        try {
            DB::beginTransaction();
           
            
                $overview = Overview::findOrFail($id);
                $overview->title = $request->input('title');
                $overview->description  = $request->input('description');
                $overview->status = $request->input('status');
                if($overview->save()){
                    $overviewImg = OverviewImage::where('overview_id', $overview->id)->get();
                        foreach ($overviewImg as $image) {
                            $image->delete();
                        }
                        if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $image) {
                            $originName = $image->getClientOriginalName();
                            $fileName = pathinfo($originName, PATHINFO_FILENAME);
                            $extension = $image->getClientOriginalExtension();
                            $fileName = $fileName . '_' . time() . '.' . $extension;
                            $image->move(public_path('overview_image'), $fileName);
                            $url = asset('overview_image/' . $fileName);
                            $bannerImage = OverviewImage::updateOrCreate(
                                ['image_url' => $fileName],
                                ['overview_id' => $overview->id]
                            );
                            
                        }
                    }
                }
            


            DB::commit();
            return redirect()->back()->with('success', 'Overview updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something went wrong');
        }
        
    }
}
