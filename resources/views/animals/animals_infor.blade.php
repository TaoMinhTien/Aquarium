@extends('welcome')
@section('title', 'Animal - View')
@section('content')
<div class="container-quang">
   <div>
      @include('layout.slider_ticket')
      <div class="text-center mt-3">
         <h1 class="text-xl  font-bold text-gray-900 sm:text-3xl">Animal View</h1>
      </div>
      <div class="flex justify-end border-t border-gray-500"></div>
      <div class="grid px-3 mt-4 grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
         <div class="h-full left-news rounded-lg  lg:col-span-2">
            @if (isset($animalInforInfor))
            {!! $animalInforInfor->description !!}
            @endif
         </div>
         <div class="h-full right-news rounded-lg ">
            <div class="_news_r">
               <span class="text-xl ml-6 mb-3 font-bold text-gray-900 sm:text-xl">Related Animals</span>
            </div>
            <div class="flex justify-end border-t border-gray-500"></div>
            <div>
               <ul>
                  @if (isset($animals))
                  @foreach ($animals as $event)
                  <li class="_new_r ml-6 my-2">
                     <form method="post" action="{{route('animals.infor.view')}}">
                        @csrf
                        <input type="hidden" name="animal_infor_id" value="{{$event->id}}">
                        <button type="submit">
                           <div class="flex">
                              <span>
                                 <img src="{{ asset('news_img/' . $event->image) }}" alt="" class="w-fit">
                              </span>
                              <div>
                                 <div class="_name">
                                    <h3 class="event_name mt-2"><strong>{{$event->title}}</strong></h3>
                                    <dl class="_news_r_ticket mt-1">
                                       <div class="d-flex">
                                          <dd class="inline">{{$event->description}} </dd>
                                       </div>
                                    </dl>
                                 </div>
                              </div>
                           </div>
                        </button>
                     </form>
                  </li>
                  <div class="flex justify-end border-t border-gray-400"></div>
                  @endforeach
                  @endif
               </ul>
               <div class="flex justify-start mt-3 ml-6">
                  <a href="/animals" class="block rounded-xl bg-gray-900 px-8 py-2 text-sm text-white transition hover:bg-black">
                     Show all
                  </a>
               </div>
            </div>
         </div>
      </div>
      @endsection