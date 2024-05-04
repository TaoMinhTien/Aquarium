@extends('welcome')
@section('title', 'News')
@section('content')
<div class="container-quang">
   <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div id="checkStockUrl" data-url="{{ route('checkStock') }}"></div>
      <div id="urlRe" data-checkout-url="{{ route('checkout.view') }}"></div>
      <form data-url="{{ route('cart.add') }}" id="ticketViewFrom" method="post">
         @csrf
         <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-10">
            <div class="lg:py-24">
               <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
               <h2 class="text-3xl font-bold sm:text-4xl">{{$ticket -> name}}</h2>
               <p id="stockStatus" class="ml-1 text-sm text-gray-700 "></p>
               <span class="text-sm text-gray-700 ml-1 font-bold">{{ number_format($ticket->price/ 1000, 3, ',', ',') }}đ</span>
               <div class="py-1">
                  <div class="flex">
                     <div class="w-full">
                        <div>
                           <div class="flex items-center gap-1">
                              <button id="decreaseQuantityBtn" type="button" class="size-9 leading-10 text-gray-600 transition hover:opacity-75" onclick="decreaseQuantity()">
                                 &minus;
                              </button>
                              <input type="number" name="quantity" for="quantity" id="quantity" value="1" class="h-8 w-16 border rounded border-gray-400 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                              <button id="increaseQuantityBtn" type="button" class="size-9 leading-10 text-gray-600 transition hover:opacity-75">
                                 &plus;
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="flex py-3">
                  <div class="mr-1">
                     <button type="button" id="addToCartBtn" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                        Add to cart
                     </button>
                  </div>
                  <div class="">
                     <button id="buyNowBtn" class="block rounded-xl bg-gray-800 px-10 py-2 text-sm text-white transition hover:bg-black">
                        Buy Now
                     </button>
                  </div>
               </div>
            </div>
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
               <img alt="" src="{{ asset('news_img/' . $ticket->image) }}" class="absolute inset-0 h-full w-full object-cover" />
            </div>
         </div>
      </form>
   </div>
   <p class="text-xl mt-4 flex justify-center font-bold text-gray-900 sm:text-3xl">Ticket detals</p>
   <div class="flex pb-4 justify-end border-t border-gray-500"></div>
   @if (isset($event))
   <p class="px-10 text-gray-700">
      @foreach ($formattedEvents as $formattedEvent)
      {!! $formattedEvent['text'] !!}
      @endforeach
   </p>
   <form action="{{ route('news.read', ['id' => $event->id]) }}" method="POST">
      @csrf
      <button type="submit" class="block ml-10 mt-3 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
         Read More
      </button>
   </form>
   @endif
</div>
<p class="text-xl mt-4 flex justify-center font-bold text-gray-900 sm:text-3xl">Relate tickets</p>
<div class="flex pb-4 justify-end border-t border-gray-500"></div>
@include('layout.all_ticket2')
@endsection