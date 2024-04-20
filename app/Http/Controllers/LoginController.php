<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('layout.login');
    }
    //
    public function HandleLogin(Request $request)
    {

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)->first();
        if( !$user){
            return back()->withInput()->with('error', 'User does not exist!');
        }
        $remember = $request->has('remember'); 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->intended('admin/')->with('success', 'Logged in successfully!');
        } else {
            return back()->withInput()->with('error', 'Incorrect email or password!');
        }
    }
    ///

    public function HandleLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('layout.login')->with('success', 'Logged out successfully!');
    }
}
