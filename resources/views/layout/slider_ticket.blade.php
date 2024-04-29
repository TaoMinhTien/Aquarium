<div class="mx-auto max-w-screen-xl px-4  sm:px-6 sm:p1-2 lg:px-8">
   <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
      <div class="grid place-content-center rounded p-6 sm:p-8">
         <div class="mx-auto max-w-md text-center lg:text-left">
            <div>
               <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Tickets</h2>
               <p class="mt-4 text-gray-600">
                  Bố mẹ và bé hãy cùng VinKE đếm ngược nhé, sẽ có rất nhiều hoạt động bất ngờ dành cho bé
               </p>
            </div>
            <a href="{{Route('tickets')}}" class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring">
               Show All
            </a>
         </div>
      </div>
      <div class="lg:col-span-2 lg:py-8">
         <ul class="grid grid-cols-2 gap-4">
            @if (isset($slider_tickets))
            @foreach ($slider_tickets as $slider )
            <li>
               <form action="{{ route('ticket.view') }}" method="POST">
                  <input type="hidden" name="ticket_id" value="{{$slider->id}}">
                  <input type="hidden" name="event_id" value="{{ $slider->event_id }}">
                  <button type="submit">
                     <div class="flex justify-start">
                        <img src="{{ asset('news_img/' . $slider -> image) }}" alt="" class=" slide_02 aspect-square rounded object-cover" />
                     </div>
                     <div class=" mt-3 justify-start">
                        <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                           {{$slider -> name}}
                        </h3>
                        <p class="mt-1 text-sm text-gray-700">{{ number_format($slider->price/ 1000, 3, ',', ',') }}đ</p>
                     </div>
                  </button>
               </form>
            </li>
            @endforeach
            @else
            <h1>No slider</h1>
            @endif

         </ul>
      </div>
   </div>
</div>