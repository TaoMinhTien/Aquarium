<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
   <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
      <div class="grid place-content-center rounded p-6 sm:p-8">
         <div class="mx-auto max-w-md text-center lg:text-left">
            <div>
               <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Tickets</h2>
               <p class="mt-4 text-gray-500">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas rerum quam amet
                  provident nulla error!
               </p>
            </div>
            <a href="{{Route('ticket')}}" class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring">
               Show All
            </a>
         </div>
      </div>
      <div class="lg:col-span-2 lg:py-8">
         <ul class="grid grid-cols-2 gap-4">
            <li>
               <a href="#" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square w-full h-full rounded object-cover" />
                  <div class="mt-3">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Content name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>

            <li>
               <a href="#" class="group block">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="aspect-square  h-full w-full rounded object-cover" />
                  <div class="mt-3">
                     <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                        Content name
                     </h3>
                     <p class="mt-1 text-sm text-gray-700">500.000đ</p>
                  </div>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>