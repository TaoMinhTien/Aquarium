@extends('welcome')
@section('title', 'News')
@section('content')
<!-- start -->
<style>

</style>
<div class="container-quang">
   <div>
      @include('layout.slider_ticket')
      <span class="flex py-4 items-center">
         <span class="h-px flex-1 "></span>
      </span>
      <div class="grid grid-cols-1 px-20 gap-1 lg:grid-cols-3 lg:gap-1">
         <div class="left-news rounded-lg  lg:col-span-2">
            <h2 class="text-xl mb-2 font-bold text-gray-900 sm:text-3xl">Detail evens</h2>
            <div class="flex justify-end border-t border-gray-500"></div>

            <div class="_news_left">
               <div>
                  <div class="mb-2 text-sm text-gray-700 font-semibold">{{ $newsRead['newsRead'] -> start_date }}</div>
                  <div class="_newread">
                     {!! $newsRead['newsRead']->description !!}
                  </div>
                  <div class="flex py-3">
                     <div class="mr-1">
                        @if (isset($tickets))
                        <form action="{{ route('ticket.view') }}" method="POST">
                           <input type="hidden" name="ticket_id" value="{{$tickets[0]->id}}">
                           <input type="hidden" name="event_id" value="{{ $tickets[0]->event_id }}">
                           <button type="submit" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                              Buy Tickets
                           </button>
                        </form>
                        @else
                        {{ redirect()->route('error') }}
                        @endif
                     </div>
                     <div class="">
                        <a href="{{Route('contact.view')}}" type="submit" class="block rounded-xl bg-gray-800 px-6 py-2 text-sm text-white transition hover:bg-black">
                           Receive contact
                        </a>
                     </div>
                  </div>
                  <div class="flex py-3 justify-end border-t border-gray-500"></div>
               </div>
            </div>
         </div>
         <div class="right-news h-fit rounded-lg ">
            <div class="mb-3">
               <span class="text-xl ml-4 font-bold text-gray-900 sm:text-xl">Tickets</span>
            </div>
            <div class="flex justify-end mb-2 border-t border-gray-500"></div>
            <div>
               <ul class="ml-3">
                  <li class="_new_r">
                     @if (isset($tickets) && count($tickets) > 0)
                     <form action="{{ route('ticket.view') }}" method="POST">
                        <div class="d-flex">
                           <a href="">
                              <img src="{{ asset('news_img/' . $tickets[0]->image) }}" alt="" class="w-fit">
                           </a>
                           <div>
                              <div class="_name mt-2">
                                 <a href="">
                                    <h3 class="event_name mt-2"><strong>{{$tickets[0]->name}}</strong></h3>
                                 </a>
                                 <dl class="_news_r_ticket mt-1">
                                    <div class="d-flex">
                                       <dt class="inline">Ticket:</dt>
                                       <dd class="inline"> {{ number_format($tickets[0]->price/ 1000, 3, ',', ',') }}đ</dd>
                                    </div>
                                 </dl>
                              </div>
                              <div class="flex justify-end">
                                 <div class="ml-32 mt-2 ">
                                    <input type="hidden" name="ticket_id" value="{{$tickets[0]->id}}">
                                    <input type="hidden" name="event_id" value="{{ $tickets[0]->event_id }}">
                                    <button type="submit" class="block rounded-xl bg-gray-800 px-4 mr-8 py-2 text-sm text-white transition hover:bg-black">
                                       Buy now
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                     @else
                     <h1>No</h1>
                     @endif
                  </li>
               </ul>
               <div class="flex mt-2 justify-end mb-2 border-t border-gray-500"></div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection