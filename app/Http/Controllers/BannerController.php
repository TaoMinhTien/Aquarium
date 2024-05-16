<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Banner;
use App\Models\BannerImage;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function create()
    {
        return view('banner.create');
    }
    // upload banner
    public function bannerStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|max:150',
            'images.*' => 'required|image|max:4000',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // try {
        //     DB::beginTransaction();
            $banner = new Banner();
            $banner->title = $request->input('title');
            $banner->description  = $request->input('description');
            $banner->status = $request->input('status');
            if($banner->save()){
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $originName = $image->getClientOriginalName();
                        $fileName = pathinfo($originName, PATHINFO_FILENAME);
                        $extension = $image->getClientOriginalExtension();
                        $fileName = $fileName . '_' . time() . '.' . $extension;
                        $image->move(public_path('banner_image'), $fileName);
                        $url = asset('banner_image/' . $fileName);
                        $BannerImage = new BannerImage();
                        $BannerImage->banner_id = $banner->id;
                        $BannerImage->image_url = $fileName;
                        $BannerImage->save();
                    }
                }
            }
           
        //     DB::commit();
        //     return redirect()->back()->with('success', 'Banner uploaded successfully!');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return redirect()->back()->with('error', 'An error occurred while uploading the Banner.');
        // }
    }
    //
    public function deleteBanner($id)
    {
        try {
            $Banner = Banner::findOrFail($id);
            if ($Banner) {
                $Banner->delete();
            } else {
                return redirect()->back()->with('error', 'Banner not found!');
            }
            return redirect()->back()->with('success', 'Banner deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'error ' . $e->getMessage());
        }
    }
    ///  // Update banner
    public function edit()
    {
        $banners = Banner::all();
        return view('banner.edit', [
            'banners' => $banners
        ]);
    }
    ///
    public function handleUpdate($id)
    {
        $banner = Banner::find($id);
        $imgBanners = BannerImage::where('banner_id', $banner -> id)->get();
        return view('banner.update', [
            'banner' => $banner,
            'imgBanners' => $imgBanners,
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
        if ($uploadedImagesCount < 3 || $uploadedImagesCount > 3) {
            return redirect()->back()->with('error', 'You can only upload 3 pictures');

        }
        try {
            DB::beginTransaction();
           
            
                $banner = Banner::findOrFail($id);
                $banner->title = $request->input('title');
                $banner->description  = $request->input('description');
                $banner->status = $request->input('status');
                if($banner->save()){
                    $bannerImg = BannerImage::where('banner_id', $banner->id)->get();
                        foreach ($bannerImg as $image) {
                            $image->delete();
                        }
                        if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $image) {
                            $originName = $image->getClientOriginalName();
                            $fileName = pathinfo($originName, PATHINFO_FILENAME);
                            $extension = $image->getClientOriginalExtension();
                            $fileName = $fileName . '_' . time() . '.' . $extension;
                            $image->move(public_path('banner_image'), $fileName);
                            $url = asset('banner_image/' . $fileName);
                            $bannerImage = BannerImage::updateOrCreate(
                                ['image_url' => $fileName],
                                ['banner_id' => $banner->id]
                            );
                            
                        }
                    }
                }
            


            DB::commit();
            return redirect()->back()->with('success', 'Banner updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something went wrong');
        }
        
    }
}
