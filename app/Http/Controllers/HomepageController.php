<?php

namespace App\Http\Controllers;
use App\Models\AnimalInfor;
use App\Models\Banner;
use App\Models\BannerImage;
use App\Models\Information;
use App\Models\InformationImage;
use App\Models\Overview;
use App\Models\OverviewImage;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $animals = AnimalInfor::inRandomOrder()
            ->take(3)
            ->get();
        $banner = Banner::inRandomOrder()
            ->take(1)
            ->get();

     $bannerImg = Banner::where('status', 'Active')
     ->first();
     $Information = Information::where('status', 'Active')
     ->take(2)
     ->get();

     $getImageInformation = [];

     foreach ($Information as $index => $info) {
         $getImageInformation[$index] = InformationImage::where('information_id', $info->id)->get();
     }
     $getImageBanner = BannerImage::where('banner_id' ,$bannerImg ->id )-> get();

     $Overview = Overview::where('status', 'Active')
     ->first();
     $getImageOverview = OverviewImage::where('overview_id' ,$Overview ->id )-> get();
        return view('layout.homepage', [
            'animalsHomepage' => $animals,
            
            'Banners' => $banner,
            'getImageBanner' => $getImageBanner,

            'Information' => $Information,
            'getImageInformation' => $getImageInformation,

            'Overview' => $Overview,
            'getImageOverview'=> $getImageOverview


        ]);

    }
}
