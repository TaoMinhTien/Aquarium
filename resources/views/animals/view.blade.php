@extends('welcome')
@section('title', 'Animals')
@section('content')
<div class="container-quang">
   <div>
      @include('layout.slider_ticket')
      <div class="text-center mt-3">
         <h1 class="text-xl  font-bold text-gray-900 sm:text-3xl">Animals</h1>
      </div>
      <div class="flex justify-end border-t border-gray-500"></div>
      <div class="grid px-5 mt-4 grid-cols-1 gap-2 lg:grid-cols-4 lg:gap-2">
         @if (isset($animals))
         @foreach ($animals as $event)
         <div class="h-fit rounded-lg ">
            <form method="post" action="{{route('animals.infor.view')}}" class="group block">
               @csrf
               <input type="hidden" name="animal_infor_id" value="{{$event->id}}">
               <img src="{{ asset('news_img/' . $event->image) }}" alt="" class="aspect-square img_animals rounded object-cover" />
               <div class="mt-2 mb-3">
                  <h3 class="font-medium text-gray-900 ">
                     {{$event->title}}
                  </h3>
                  <span class="text-xs text-gray-600">{{$event->description}}</span>
               </div>
               <div>
                  <button type="submit" class="block rounded-xl bg-gray-900 px-8 py-2 text-sm text-white transition hover:bg-black">
                     Read More
                  </button>
               </div>
            </form>
         </div>
         @endforeach
         @endif
      </div>
   </div>
   @endsection