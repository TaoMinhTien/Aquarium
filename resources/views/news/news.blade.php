@vite('resources/css/app.css')
<link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">

<div>
  @include('news.slider')

  <div class="px-10">
    <div class="mt-3 ">
      <ol class="flex items-center gap-1 text-sm text-gray-600">
        <li>
          <a href="#" class="block transition hover:text-gray-700">
            <span class="sr-only"> Home </span>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
          </a>
        </li>

        <li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </li>

        <li>
          <a href="#" class="block transition hover:text-gray-700">News</a>
        </li>
      </ol>
    </div>
    <div class="flex justify-start mt-6">
      <strong class="text-[40px] text-gray-700">Standard Post</strong>
    </div>
    <div class=" mt-1 grid grid-cols-1 gap-4 lg:grid-cols-3 ">
      <!-- left -->
      <div class="left-news h-full rounded-lg lg:col-span-2">
        <div class="overflow-hidden rounded-lg shadow-xl ">
          <div>
            <img class=" w-full object-cover" alt="" src="https://a.cdn-hotels.com/gdcs/production92/d257/02157ac0-adda-4a14-9bb6-58eb7ecc28a1.jpg?impolicy=fcrop&w=800&h=533&q=medium" />
            <div class="bg-white p-4 sm:p-6">
              <div class="block text-xs text-gray-500">20.04.2024</div>
              <a href="#">
                <h3 class="mt-0.5 text-lg text-gray-900">How to position your furniture for positivity</h3>
              </a>
              <p class="mt-2   text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
              </p>
            </div>
            <div class="mt-2 ml-5 ">
              <form action="{{Route('news.read')}}" method="POST">
                @csrf
                <button type="submit" class="inline-block w-full rounded bg-cyan-600	 hover:bg-cyan-700	 px-10 py-2 font-medium text-white sm:w-auto">
                  Read More
                </button>
              </form>

            </div>
          </div>
          <div class="flex justify-end border-t border-gray-300 my-5"></div>
          <div>
            <img class=" w-full object-cover" alt="" src="https://a.cdn-hotels.com/gdcs/production92/d257/02157ac0-adda-4a14-9bb6-58eb7ecc28a1.jpg?impolicy=fcrop&w=800&h=533&q=medium" />
            <div class="bg-white p-4 sm:p-6">
              <div class="block text-xs text-gray-500">20.04.2024</div>
              <a href="#">
                <h3 class="mt-0.5 text-lg text-gray-900">How to position your furniture for positivity</h3>
              </a>
              <p class="mt-2   text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
              </p>
            </div>
            <div class="mt-2 ml-5 ">
              <button type="submit" class="inline-block w-full rounded bg-cyan-600	 hover:bg-cyan-700 px-10 py-2 font-medium text-white sm:w-auto">
                Read More
              </button>
            </div>
          </div>
          <div class="flex justify-end border-t border-gray-300 my-5"></div>
        </div>
        <!--  -->

      </div>
      <!-- right -->
      <div class=" right-news	rounded-lg">
        <div class="flex justify-start mt-2">
          <strong class="text-[20px] text-gray-700">Related events</strong>
        </div>
        <div class="flex justify-end border-t border-gray-500"></div>
        <div class="overflow-hidden  shadow-lg ">
          <!--  -->
          <div>
            <ul>
              <li class="flex justify-between	gap-4 py-3">
                <div class="flex">
                  <a href="">
                    <img src="https://a.cdn-hotels.com/gdcs/production92/d257/02157ac0-adda-4a14-9bb6-58eb7ecc28a1.jpg?impolicy=fcrop&w=800&h=533&q=medium" alt="" class="size-24 rounded object-cover">
                  </a>
                  <div class="ml-4">
                    <a href="">
                      <h3 class="text-sm text-gray-600"><strong>News name</strong></h3>
                    </a>
                    <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                      <div>
                        <dt class="inline"></dt>
                      </div>
                      <div>
                        <dt class="inline">Date:</dt>
                        <dd class="inline">20.04.2024</dd>
                      </div>
                      <div>
                        <dt class="inline">Ticket:</dt>
                        <dd class="inline">299.000đ</dd>
                      </div>
                    </dl>
                  </div>
                </div>
                <div class="flex items-end">
                  <div class="mr-1">
                    <form action="{{Route('news.read')}}" method="POST">
                      @csrf
                      <button type="submit" class="inline-block w-full rounded bg-cyan-600	 hover:bg-cyan-700	 px-2 py-1 font-medium text-white sm:w-auto">
                      Detail
                      </button>
                    </form>
                  </div>
                  <div>
                    <form action="{{Route('tickets.buy')}}" method="post">
                      @csrf
                      <button type="submit" class="inline-block w-full rounded bg-cyan-600	 hover:bg-cyan-700	 px-4 py-1 font-medium text-white sm:w-auto">
                        Buy now
                      </button>
                    </form>
                  </div>
                </div>
              </li>
              <div class="flex justify-end border-t border-gray-200"></div>
              <!--  -->
              <li class="flex justify-between	gap-4 py-3">
                <div class="flex">
                  <a href="">
                    <img src="https://a.cdn-hotels.com/gdcs/production92/d257/02157ac0-adda-4a14-9bb6-58eb7ecc28a1.jpg?impolicy=fcrop&w=800&h=533&q=medium" alt="" class="size-24 rounded object-cover">
                  </a>
                  <div class="ml-4">
                    <a href="">
                      <h3 class="text-sm text-gray-600"><strong>News name</strong></h3>
                    </a>
                    <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                      <div>
                        <dt class="inline"></dt>
                      </div>
                      <div>
                        <dt class="inline">Date:</dt>
                        <dd class="inline">20.04.2024</dd>
                      </div>
                      <div>
                        <dt class="inline">Ticket:</dt>
                        <dd class="inline">299.000đ</dd>
                      </div>
                    </dl>
                  </div>
                </div>
                <div class="flex items-end">
                  <div class="mr-1">
                    <button type="submit" class="inline-block w-full rounded bg-cyan-600	 hover:bg-cyan-700	 px-2 py-1 font-medium text-white sm:w-auto">
                    Detail
                    </button>
                  </div>
                  <div>
                    <button type="submit" class="inline-block w-full rounded bg-cyan-600	 hover:bg-cyan-700	 px-4 py-1 font-medium text-white sm:w-auto">
                      Buy now
                    </button>
                  </div>
                </div>
              </li>
              <div class="flex justify-end border-t border-gray-200"></div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="mt-10">
  <span class="flex items-center">
    <span class="h-px flex-1 bg-gray-300"></span>
  </span>
  <p class="mt-7">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
    dignissimos. Molestias explicabo corporis voluptatem?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
    dignissimos. Molestias explicabo corporis voluptatem?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
    dignissimos. Molestias explicabo corporis voluptatem?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
    dignissimos. Molestias explicabo corporis voluptatem?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
    dignissimos. Molestias explicabo corporis voluptatem?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
    dignissimos. Molestias explicabo corporis voluptatem?

  </p>


</div>
</div>