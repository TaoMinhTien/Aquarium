<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Tickets;
use App\Models\AnimalInfor;
use App\Models\AnimalInforInfor;
use App\Models\TicketVariant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Psy\Readline\Hoa\Console;

class AnimalsController extends Controller
{
    //
    public function index()
    {
        $animals = AnimalInfor::simplePaginate(16);
        return view('animals.view', ['animals' => $animals]);
    }
    ///
    public function animalsUpload(Request $request)
    {

        return view('animals.upload');
    }
    //
    public function animalsView(Request $request)
    {
        $animalInforId = $request->input('animal_infor_id');
        $animals = AnimalInfor::inRandomOrder()
            ->take(3)
            ->get();
            
        $animalInforInfor = AnimalInforInfor::where('animal_id', $animalInforId)->first();
        return view('animals.animals_infor', [
            'animals' => $animals,
            'animalInforInfor' => $animalInforInfor
        ]);
    }
    //
    public function animalsUpdate()
    {
        $animals = AnimalInfor::all();
        return view('animals.update', [
            'animals' => $animals,
        ]);
    }
    //
    public function animalsDelete(Request $request)
    {
        $id = $request->input('animals_infor_id');
        $animals = AnimalInfor::find($id);
        if (!$animals) {
            return redirect()->back()->with('error', 'animals not found.');
        }
        $animals->delete();
        return redirect()->back()->with('success', 'animals deleted successfully.');
    }
    //
    public function handleUploadAnimals(Request $request)
    {
        try {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('news_img'), $fileName);
                $url = asset('news_img/' . $fileName);
                return response()->json([
                    'url' => $url,
                    'uploaded' => 1,
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'uploaded' => false,
                'error' => $e->getMessage()
            ]);
        }
    }
    //
    public function animalsHandle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_name' => 'required|string|max:255',
            'description' => 'required|string|max:150',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            DB::beginTransaction();
            $description = $request->editor;
            preg_match('/src="([^"]+)"/', $description, $matches);
            $imageUrl = $matches[1] ?? null;
            $imageFileName = basename($imageUrl);
            $AnimalInfor = new AnimalInfor();
            $AnimalInfor->title = $request->input('title_name');
            $AnimalInfor->image = $imageFileName;
            $AnimalInfor->description = $request->input('description');
            $AnimalInfor->save();
            $AnimalInforInfor = new AnimalInforInfor();
            $AnimalInforInfor->description = $request->editor;
            $AnimalInforInfor->animal_id =  $AnimalInfor->id;
            $AnimalInforInfor->save();
            DB::commit();
            return redirect()->back()->with('success', 'Animal uploaded successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('error')->withErrors([$e->getMessage()])->withInput();
        };
    }
    ///
    public function animalsEdit($id)
    {
        $animals = AnimalInfor::find($id);
        $animalInforInfor = AnimalInforInfor::where('animal_id', $id)->first();

        return view('animals.edit', [
            'animals' => $animals,
            'animalInforInfor' => $animalInforInfor
        ]);
    }
    ///
    public function animalsEditSubmit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title_name' => 'required|string|max:255',
            'description' => 'required|string|max:150',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            DB::beginTransaction();
            $descriptionrepai = $request->editor;
            preg_match('/src="([^"]+)"/', $descriptionrepai, $matches);
            $imageUrl = $matches[1] ?? null;
            $imageFileName = basename($imageUrl);

            $AnimalInfor = AnimalInfor::find($id);
            $AnimalInfor->title = $request->input('title_name');
            $AnimalInfor->image = $imageFileName;
            $AnimalInfor->description = $request->input('description');
            $AnimalInfor->save();
            $AnimalInforInfor = AnimalInforInfor::where('animal_id',  $AnimalInfor->id)->first();
            $AnimalInforInfor->description = $descriptionrepai;
            $AnimalInforInfor->save();
            DB::commit();
            return redirect()->back()->with('success', 'Animal update successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while update the news.');
        }
    }
}
