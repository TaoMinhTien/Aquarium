<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Information;
use App\Models\InformationImage;

use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function create()
    {
        return view('information.create');
    }
    public function InformationStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|max:150',
            'images.*' => 'required|image|max:4000',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $uploadedImages = $request->file('images');

        if ($uploadedImages === null) {
            return redirect()->back()->with('error', 'No images were uploaded.');
        }else{
        $uploadedImagesCount = count($request->file('images'));
        if ($uploadedImagesCount < 1 || $uploadedImagesCount > 1) {
            return redirect()->back()->with('error', 'You can only upload 3 pictures');

        }}
        try {
            DB::beginTransaction();
            $information = new Information();
            $information->title = $request->input('title');
            $information->description  = $request->input('description');
            $information->status = $request->input('status');
            if($information->save()){
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $originName = $image->getClientOriginalName();
                        $fileName = pathinfo($originName, PATHINFO_FILENAME);
                        $extension = $image->getClientOriginalExtension();
                        $fileName = $fileName . '_' . time() . '.' . $extension;
                        $image->move(public_path('information_image'), $fileName);
                        $url = asset('information_image/' . $fileName);
                        $InformationImage = new InformationImage();
                        $InformationImage->information_id = $information->id;
                        $InformationImage->image_url = $fileName;
                        $InformationImage->save();
                    }
                }
            }
           
            DB::commit();
            return redirect()->back()->with('success', 'Information uploaded successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while uploading the Information.');
        }
    }

    public function deleteInformation($id)
    {
        try {
            $Information = Information::findOrFail($id);
            if ($Information) {
                $Information->delete();
            } else {
                return redirect()->back()->with('error', 'Information not found!');
            }
            return redirect()->back()->with('success', 'Information deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'error ' . $e->getMessage());
        }
    }
    ///  // Update banner
    public function edit()
    {
        $information = Information::all();
        return view('information.edit', [
            'information' => $information
        ]);
    }
    ///
    public function handleUpdate($id)
    {
        $information = Information::find($id);
        $InformationImg = InformationImage::where('information_id', $information -> id)->get();
        return view('information.update', [
            'information' => $information,
            'Informationimg' => $InformationImg
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|max:150',
            'images.*' => 'required|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $uploadedImages = $request->file('images');

        if ($uploadedImages === null) {
            return redirect()->back()->with('error', 'No images were uploaded.');
        }else{
        $uploadedImagesCount = count($request->file('images'));
        if ($uploadedImagesCount < 1 || $uploadedImagesCount > 1) {
            return redirect()->back()->with('error', 'You can only upload 3 pictures');

        }}
        
        try {
            DB::beginTransaction();
           
            
                $information = Information::findOrFail($id);
                $information->title = $request->input('title');
                $information->description  = $request->input('description');
                $information->status = $request->input('status');
                if($information->save()){
                    $InformationImg = InformationImage::where('information_id', $information->id)->get();
                        foreach ($InformationImg as $image) {
                            $image->delete();
                        }
                        if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $image) {
                            $originName = $image->getClientOriginalName();
                            $fileName = pathinfo($originName, PATHINFO_FILENAME);
                            $extension = $image->getClientOriginalExtension();
                            $fileName = $fileName . '_' . time() . '.' . $extension;
                            $image->move(public_path('information_image'), $fileName);
                            $url = asset('information_image/' . $fileName);
                            $bannerImage = InformationImage::updateOrCreate(
                                ['image_url' => $fileName],
                                ['information_id' => $information->id]
                            );
                            
                        }
                    }
                }
            


            DB::commit();
            return redirect()->back()->with('success', 'Information updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something went wrong');
        }
        
    }
}
