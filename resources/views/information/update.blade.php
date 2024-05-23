@extends('admin.dashboard')
@section('title', 'Banner - Update')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-dark"> update Information</h2>
   <div class="flex items-center justify-center">
      <div class=" mt-3">
         <div>
            @if (isset($imgInformation) )
            <div class="flex ">
            @foreach ($imgInformation as $value )
            <img class="w-2/12 ml-3" src="{{ asset('information_image/' . $value->image_url) }}" alt="">
            @endforeach
            </div>
            @endif
         </div>


            @if (isset($information) )
         <form method="POST" action="{{ route('admin.information.update', ['id' =>  $information -> id])}}" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
               <label for="title" class="form-label">Title</label>
               <input type="text" value="{{$information-> title}}" id="title" name="title" placeholder="Enter title" class="form-control" value="{{ old('title') }}" required autofocus>
            </div>
            <div class="mt-4">
               <label for="description" class="form-label">Description</label>
               <textarea id="description" name="description" class="form-control" required>{{$information->description }}</textarea>
            </div>
            <div class="mt-4">
               <label for="images" class="form-label">Images</label>
               <input type="file" id="images" name="images[]" multiple>
            </div>
            <div class="mt-4">
               <select name="status" class="border rounded px-2 py-1">
                  <option value="active" {{ $information->status == 'Active' ? 'selected' : '' }} >Active</option>
                  <option value="inactive" {{ $information->status == 'Expired' ? 'selected' : '' }}>Inactive</option>
               </select>
            </div>
            @endif
            @if (session('success'))
            <div class="alert text-blue-600 alert-success">
               <strong>{{ session('success') }} </strong>
            </div>
            @endif
            @if (session('error'))
            <div class="mt-1 text-xs text-red-700 rounded-xl">
               {{ session('error') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="mt-1 text-xs text-red-700 rounded-xl">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            <div class="flex items-center justify-end mt-4">
               <button type="submit" class="btn btn-primary ml-4">Update</button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
@endsection