<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{

    //
    public function contactView(){
        return view('layout.contact');
    }
    //
    public function HandleContact(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{10}$/',
            'notes' => 'string|max:500',

        ]);
    }
}
