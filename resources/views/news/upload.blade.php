@extends('admin.dashboard')
@section('title', 'Upload - News')
@section('content')
<div class="px-5">
   <form method="post" action="">

      <div class="">
         <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>
         <input type="email" id="Email" name="email" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
      </div>


   </form>

</div>
@endsection