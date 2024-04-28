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
                        <a href="{{Route('ticket.view')}}" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                           Buy Tickets
                        </a>
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
            <div class="_news_r">
               <span class="text-xl ml-2 mb-1 font-bold text-gray-900 sm:text-xl">Tickets</span>
            </div>
            <div class="flex justify-end border-t border-gray-500"></div>
            <div>
               <ul>
                  <li class="_new_r">
                     <div class="d-flex">
                        <a href="">
                           <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="">
                        </a>
                        <div class="_name mt-2">
                           <a href="">
                              <h3 class="event_name"><strong>News name</strong></h3>
                           </a>
                           <dl class="_news_r_ticket mt-1">
                              <div class="d-flex">
                                 <dt class="inline">Date:</dt>
                                 <dd class="inline ms-1">20.04.2024</dd>
                              </div>
                              <div class="d-flex">
                                 <dt class="inline">Ticket:</dt>
                                 <dd class="inline ms-1">299.000đ</dd>
                              </div>
                           </dl>
                        </div>
                     </div>
                     <div class="_new_r_form">
                        <a href="{{Route('ticket.view')}}" class="block rounded-xl bg-gray-800 px-4 mr-8 py-2 text-sm text-white transition hover:bg-black">
                           Buy now
                        </a>
                     </div>
            </div>
            </li>
            </ul>
         </div>

      </div>
   </div>
</div>
</div>
@endsection