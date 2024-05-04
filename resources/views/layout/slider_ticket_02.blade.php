<div class="mx-auto max-w-screen-xl px-4 pt-8 pb-0 sm:px-6 sm:pt-8 lg:px-8">
   <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
      <div class="grid place-content-center rounded p-6 sm:p-8">
         <div class="mx-auto max-w-md text-center lg:text-left">
            <div>
               <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">News</h2>
               <p class="mt-4 text-gray-600">
                  no need to go far. We invite you to come to aptech aquarium
               </p>
            </div>
            <a href="/news" class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring">
               Read all
            </a>
         </div>
      </div>
      <div class="lg:col-span-2 lg:py-8">
         <ul class="grid grid-cols-2 gap-4">
            @if (isset($dataSlider_02[0]))
            <li>
               <form action="{{ route('news.read', ['id' => $dataSlider_02[0]->event_id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="group block">
                     <img src="{{ asset('news_img/' . $dataSlider_02[0]['image']) }}" alt="" class="slide_02 aspect-square rounded object-cover" />
                  </button>
                  <div class="mt-3">
                     <h3 class=" text-gray-700 group-hover:underline group-hover:underline-offset-4">
                        <p>{{$dataSlider_02[0]['description']}}.....</p>
                     </h3>
                  </div>

               </form>
            </li>
            @endif
            @if (isset($dataSlider_02[1]))
            <li>
               <form action="{{ route('news.read', ['id' => $dataSlider_02[1]->event_id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="group block">
                     <img src="{{ asset('news_img/' . $dataSlider_02[1]['image']) }}" alt="" class="slide_02 aspect-square rounded object-cover" />
                  </button>
                  <div class="mt-3">
                     <h3 class=" text-gray-700 group-hover:underline group-hover:underline-offset-4">
                        <p>{{$dataSlider_02[1]['description']}}.....</p>
                     </h3>
                  </div>

               </form>
            </li>
            @endif
         </ul>
      </div>
   </div>
</div>