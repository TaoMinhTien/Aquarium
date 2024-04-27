@extends('welcome')
@section('title', 'Ticket - All')
@section('content')
<!-- start -->
<div class="container-quang">
   <div>
      @include('layout.slider_ticket_02')
      <span class="flex pt-4 items-center">
         <span class="h-px flex-1 "></span>
      </span>
   </div>
   <p class="text-xl flex justify-center font-bold text-gray-900 sm:text-3xl">Tickets</p>
   <div class="flex pb-4 justify-end border-t border-gray-500"></div>
   <div class="grid px-8 gap-3 grid-cols-2 lg:grid-cols-4 lg:gap-4">
      <div class="h-fit rounded-lg ">
         <ul>
            <li>
               <a href="" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded object-cover" />
                  <div class="mt-3 ml-2">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Ticket name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
            <li class="flex mt-2 ml-2 justify-start ">
               <a href="{{Route('ticket.view')}}" class=" rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                  Buy now
               </a>
            </li>
         </ul>
      </div>
      <div class="h-fit rounded-lg ">
         <ul>
            <li>
               <a href="" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded object-cover" />
                  <div class="mt-3 ml-2">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Ticket name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
            <li class="flex mt-2 ml-2 justify-start ">
               <a href="{{Route('ticket.view')}}" class=" rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                  Buy now
               </a>
            </li>
         </ul>
      </div>
      <div class="h-fit rounded-lg ">
         <ul>
            <li>
               <a href="" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded object-cover" />
                  <div class="mt-3 ml-2">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Ticket name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
            <li class="flex mt-2 ml-2 justify-start ">
               <a href="{{Route('ticket.view')}}" class=" rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                  Buy now
               </a>
            </li>
         </ul>
      </div>
      <div class="h-fit rounded-lg ">
         <ul>
            <li>
               <a href="" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded object-cover" />
                  <div class="mt-3 ml-2">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Ticket name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
            <li class="flex mt-2 ml-2 justify-start ">
               <a href="{{Route('ticket.view')}}" class=" rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                  Buy now
               </a>
            </li>
         </ul>
      </div>
      <div class="h-fit rounded-lg ">
         <ul>
            <li>
               <a href="" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded object-cover" />
                  <div class="mt-3 ml-2">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Ticket name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
            <li class="flex mt-2 ml-2 justify-start ">
               <a href="{{Route('ticket.view')}}" class=" rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                  Buy now
               </a>
            </li>
         </ul>
      </div>
      <div class="h-fit rounded-lg ">
         <ul>
            <li>
               <a href="" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded  object-cover transition duration-500 group-hover:scale-105 " />
                  <div class="mt-3 ml-2">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Ticket name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
            <li class="flex mt-2 ml-2 justify-start ">
               <a href="{{Route('ticket.view')}}" class=" rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                  Buy now
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<div class="flex w-full items-center mt-10 justify-center ">
   <button class="text-gray-800  hover:underline">Load more</button>
</div>
@endsection