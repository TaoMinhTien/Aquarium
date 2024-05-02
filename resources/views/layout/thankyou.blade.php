@extends('welcome')
@section('title', 'Thank you')
@section('content')
<div class="flex h-screen items-center mb-4 justify-center bg-white">
   <div class="h-3/4">
      <div class="rounded-3xl shadow-2xl">
         <div class="p-8 text-center sm:p-12">
            <p class="text-sm font-semibold uppercase tracking-widest text-red-600">
               You have successfully purchased
            </p>
            <h2 class="mt-6 text-3xl font-bold">Thank you for your purchase. <br> we will ship upon successful order confirmation!</h2>
            <a href="{{url('/')}}" class="mt-8 inline-block w-full rounded-full hover:cursor-pointer bg-red-600 py-4 text-sm font-bold text-white shadow-xl">
               Go Back Home
            </a>
         </div>
      </div>
   </div>
</div>
@endsection