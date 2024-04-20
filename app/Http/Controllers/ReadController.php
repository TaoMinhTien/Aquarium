<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    //
    public function newsRead(){
        return view('read-news.read-news');
    }
}
