<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;


class FeedbackController extends Controller
{
    //
    public function index()
    {
        $fb = Feedback::orderBy('created_at', 'desc')->get();
        return view('layout.feedback', ['fb' => $fb]);
    }
    ////
    public function handleFeedback(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:150',
            'feedback_text' => 'required|max:800',
            'rate' => 'required|min:1|max:5',
        ], [
            'name.required' => 'Please enter a name less than 150 characters',
            'feedback_text.max' => 'Your feedback is too long!',
            'feedback_text.required' => 'Please choose to write your review',
            'rate.required' => 'Please choose star',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            DB::beginTransaction();
            $fb = new Feedback();
            $fb->name = $request->input('name');
            $fb->feedback_text = $request->input('feedback_text');
            $fb->rating = $request->input('rate');
            $fb->save();
            DB::commit();
            return redirect()->back()->with('success', 'Thank you for your feedback!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error!');
        }
    }
}
