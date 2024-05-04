@extends('welcome')
@section('title', 'Feedback - Aquarium')
@section('content')
<style>
   ._fb_input {
      width: 400px;
   }

   .fb_note {
      width: 400px;
   }

   .rate {
      float: left;
      height: 46px;
      padding: 0 10px;
   }

   .rate:not(:checked)>input {
      position: absolute;
      top: -9999px;
   }

   .rate:not(:checked)>label {
      float: right;
      width: 1em;
      overflow: hidden;
      white-space: nowrap;
      cursor: pointer;
      font-size: 30px;
      color: #ccc;
   }

   .rate:not(:checked)>label:before {
      content: '★ ';
   }

   .rate>input:checked~label {
      color: #ffc700;
   }

   .rate:not(:checked)>label:hover,
   .rate:not(:checked)>label:hover~label {
      color: #deb217;
   }

   .rate>input:checked+label:hover,
   .rate>input:checked+label:hover~label,
   .rate>input:checked~label:hover,
   .rate>input:checked~label:hover~label,
   .rate>label:hover~input:checked~label {
      color: #c59b08;
   }
</style>
<div class="container-quang">
   <div class="text-center">
      <h1 class="text-xl pt-5 font-bold text-gray-900 sm:text-3xl">Feedback</h1>
   </div>
   <div class="flex pt-2 pb-8 justify-end border-t border-gray-500"> </div>
   <div class="grid grid-cols-1 lg:grid-cols-3">
      <div class=" flex right-news justify-center rounded-lg ">
         <div class="mt-4 ml-10">
            <form action="{{route('feedback.post')}}" method="post">
               <div>
                  <input type="text" name="name" class=" _fb_input px-4 py-2 text-sm font-normal shadow-xs text-gray-900 bg-transparent border border-gray-700 rounded-full placeholder-gray-600 focus:outline-none leading-relaxed" placeholder="Your name">
               </div>
               <div class=" mt-2">
                  <textarea name="feedback_text" class="fb_note h-40 px-4 py-2 text-sm font-normal shadow-xs text-gray-900 bg-transparent border border-gray-500 rounded-2xl placeholder-gray-600 focus:outline-none resize-none leading-relaxed" placeholder="Enter a feedback..."></textarea>
               </div>
               <div class="flex">
                  <div class="rate">
                     <input type="radio" id="star5" name="rate" value="5" />
                     <label for="star5" title="text">5 stars</label>
                     <input type="radio" id="star4" name="rate" value="4" />
                     <label for="star4" title="text">4 stars</label>
                     <input type="radio" id="star3" name="rate" value="3" />
                     <label for="star3" title="text">3 stars</label>
                     <input type="radio" id="star2" name="rate" value="2" />
                     <label for="star2" title="text">2 stars</label>
                     <input type="radio" id="star1" name="rate" value="1" />
                     <label for="star1" title="text">1 star</label>
                  </div>
               </div>
               @if (session('success'))
               <div class="alert bg-white text-blue-700 ">
                  <strong>{{ session('success') }} </strong>
               </div>
               @endif
               @error('name')
               <div class=" text-red-700 rounded-xl relative" role="alert">
                  <span class="block sm:inline text-xs">{{ $message }}</span>
               </div>
               @enderror
               @error('feedback_text')
               <div class=" text-red-700 rounded-xl relative" role="alert">
                  <span class="block sm:inline text-xs">{{ $message }}</span>
               </div>
               @enderror
               @error('rate')
               <div class=" text-red-700 rounded-xl relative" role="alert">
                  <span class="block sm:inline text-xs">{{ $message }}</span>
               </div>
               @enderror
               <button type="submit" class="block mt-3 mr-2 rounded-xl bg-black px-8 py-2 text-sm text-white transition">
                  Send
               </button>
            </form>
         </div>
      </div>
      <div class="rounded-lg left-news lg:col-span-2">
         <div class="bg-white">
            <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 ">
               <div class=" grid grid-cols-1  md:grid-cols-2 gap-2">
                  @foreach ($fb as $value )
                  <blockquote class="rounded-lg bg-gray-50 shadow-xl px-2 pt-2 pb-3">
                     <div class="flex items-center gap-4">
                        <div>
                           <p class="mt-0.5 text-lg font-medium text-gray-900">{{$value -> name}}</p>
                           <div class="flex gap-0.5 text-yellow-500">
                              @for ($i = 0; $i < $value->rating; $i++)
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                 </svg>
                                 @endfor
                           </div>
                        </div>
                     </div>
                     <p class="mt-2 text-gray-700">
                        {{$value -> feedback_text}}
                     </p>
                  </blockquote>
                  @endforeach

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection