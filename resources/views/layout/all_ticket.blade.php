@extends('welcome')
@section('title', 'Ticket - All')
@section('content')
<!-- start -->
<div class="container-quang">
   <div>
      @include('layout.slider_ticket_02')
      <span class="flex py-4 items-center">
         <span class="h-px flex-1 "></span>
      </span>
   </div>
   <p class="text-xl flex justify-center font-bold text-gray-900 sm:text-3xl">Tickets</p>
   <div class="flex pb-4 justify-end border-t border-gray-500"></div>
   @include('layout.all_ticket2')
</div>
@endsection