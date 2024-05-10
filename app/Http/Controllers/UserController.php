<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //
    public function view()
    {
        $user = User::all();
        return view('user.user', ['user' => $user]);
    }
    ///
    public function userDelete(Request $request)
    {
        $user = User::find($request->input('user_id'));
        if ($user) {
            try {
                DB::beginTransaction();
                $user->delete();
                DB::commit();
                return redirect()->route('user.delete')->with('success', 'User deleted successfully!');
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->route('error')->withErrors([$e->getMessage()])->withInput();
            };
        } else {
            return redirect()->route('error');
        }
    }
    ///
    public function userEdit(Request $request)
    {
        $user = User::find($request->input('user_id'));
        return view('user.edit', ['user' => $user]);
    }
    ///
    public function userUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:100',
            'email' => 'required|email',
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|different:current_password',
            'confirm_password' => 'required|string|same:new_password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages(['current_password' => 'The provided password does not match your current password.']);
        }
        try {
            DB::beginTransaction();
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->new_password);
            $user->save();
            DB::commit();
            return redirect()->back()->with('success', 'user update successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }
}
