<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{

    //
    public function contactView()
    {
        return view('layout.contact');
    }
    //
    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'gender' => 'required',
        ]);
        if ($request->filled('gender')) {
            if ($request->gender === 'Male' || $request->gender === 'Female') {
                $validatedData['gender'] = $request->gender;
            } else {
                return response()->json(['message' => 'Invalid gender value'], 422);
            }
        }

        // Create a new contact record
        $contact = new Contact();
        $contact->fill($validatedData);
        $contact->save();

        return response()->json(['message' => 'Form submitted successfully']);
    }
}
