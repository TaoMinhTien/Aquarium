<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('layout.register');
    }
    //
    public function HandleRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            $data = [
                'email' => $request->email,
                'message' => 'This email has already been taken. Please use or click forgot password!',
            ];
            return redirect()->route('login')->with('existingUser', $data);
        }
        try {
            DB::beginTransaction();
            $user = new User();
            $user->name = $request->fullname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::login($user);
            DB::commit();
            return redirect()->route('login')->with('success', 'Your account has been registered successfully! Please log in.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('register')->withErrors([$e->getMessage()])->withInput();
        }
    }
}
