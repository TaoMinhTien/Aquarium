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
        // if ($request->filled('gender')) {
        //     // Nếu trường gender được gửi lên

        //     // Kiểm tra giá trị của gender
        //     if ($request->gender === 'on') {
        //         // Nếu giá trị của gender là 'on', thì đặt giá trị thành 'Male'
        //         $validatedData['gender'] = 'Male';
        //     } else {
        //         // Nếu giá trị của gender không phải là 'on', thì giữ nguyên giá trị
        //         $validatedData['gender'] = $request->gender;
        //     }

        //     // Kiểm tra xem giá trị của gender có phải là 'Male' hoặc 'Female' không
        //     if (!in_array($validatedData['gender'], ['Male', 'Female'])) {
        //         return response()->json(['message' => 'Invalid gender value'], 422);
        //     }
        // }
        if ($request->filled('gender')) {
            // Nếu trường gender được gửi lên

            // Kiểm tra giá trị của gender
            if ($request->gender === 'Male' || $request->gender === 'Female') {
                // Nếu giá trị của gender là 'Male' hoặc 'Female', thì giữ nguyên giá trị
                $validatedData['gender'] = $request->gender;
            } else {
                // Nếu giá trị của gender không phải là 'Male' hoặc 'Female', trả về lỗi
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
