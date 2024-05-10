<?php

namespace App\Http\Controllers;
use App\Models\AnimalInfor;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $animals = AnimalInfor::inRandomOrder()
            ->take(3)
            ->get();
        return view('layout.homepage', [
            'animalsHomepage' => $animals
        ]);
    }
}
