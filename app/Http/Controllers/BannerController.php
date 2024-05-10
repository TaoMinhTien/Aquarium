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
            'images.*' => 'required|image|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $banner = new Banner();
        $banner ->title = $request-> input('title');
        $banner -> description  = $request-> input('description');
        $banner->save();
        // if ($request->hasFile('upload')) {
        //     $originName = $request->file('upload')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $extension = $request->file('upload')->getClientOriginalExtension();
        //     $fileName = $fileName . '_' . time() . '.' . $extension;
        //     $request->file('upload')->move(public_path('news_img'), $fileName);
        //     $url = asset('news_img/' . $fileName);
        //     return response()->json([
        //         'url' => $url,
        //         'uploaded' => 1,
        //     ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $originName = $image->getClientOriginalName(); 
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension(); 
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $image->move(public_path('news_img'), $fileName); 
                $url = asset('news_img/' . $fileName);
                 $BannerImage = new BannerImage ();
                 $BannerImage -> banner_id = $banner->id;
                 $BannerImage -> image_url = $fileName;
                 $BannerImage ->save();
            }
        }
        
        return 'ok';


    }
}
