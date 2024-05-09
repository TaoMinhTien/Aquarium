@extends('admin.dashboard')
@section('title', 'User - Edit')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">User - Edit</h2>
   <div class="mt-3">
      <form method="post" action="{{Route('user.handle.update')}}" enctype="multipart/form-data">
         @csrf
         <div class="mt-3">
            <label for="username" class="text-sm font-bold text-gray-700 tracking-wide">User Name</label>
            <input type="text" id="username" value="{{ $user -> name }}" name="username" placeholder="Enter new name" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
         </div>
         <div class="mt-2">
            <label for="email" class="text-sm font-bold text-gray-700 tracking-wide">email</label>
            <input type="text" id="email" value="{{ $user -> email }}" name="email" placeholder="Enter new email" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
         </div>
         <div class="mt-2">
            <label for="current_password" class="text-sm font-bold text-gray-700 tracking-wide">Current Password</label>
            <input type="password" id="current_password" name="current_password" placeholder="••••••••" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
         </div>
         <div class="mt-2">
            <label for="new_password" class="text-sm font-bold text-gray-700 tracking-wide">New Password</label>
            <input type="password" id="new_password" name="new_password" placeholder="••••••••" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
         </div>
         <div class="mt-2">
            <label for="confirm_password" class="text-sm font-bold text-gray-700 tracking-wide">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
         </div>
         @if (session('success'))
         <div class="alert mt-2 bg-white text-blue-700 ">
            <strong>{{ session('success') }} </strong>
         </div>
         @endif
         @if ($errors->any())
         <div class="alert mt-2 bg-white ">
            <ul class="mb-1">
               @foreach ($errors->all() as $error)
               <div class="mt-0  text-red-700 rounded-xl relative" role="alert">
                  <li class="block sm:inline text-xs">{{ $error }}</li>
               </div>
               @endforeach
            </ul>
         </div>
         @endif
         <button type="submit" class="block my-4 mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
            Upload
         </button>
      </form>
   </div>
</div>
@endsection