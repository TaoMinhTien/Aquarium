@extends('welcome')
@section('title', 'News')
@section('content')
<!-- start -->
<div class="container-quang">
  <div>
    @include('layout.slider_ticket')
    <span class="flex py-4 items-center">
      <span class="h-px flex-1 "></span>
    </span>
    <div class="grid grid-cols-1 px-20 gap-1 lg:grid-cols-3 lg:gap-1">
      <div class="left-news rounded-lg  lg:col-span-2">
        <h2 class="text-xl mb-4 font-bold text-gray-900 sm:text-3xl">Evens</h2>
        <div class="_news_left">
          <div>
            <img class=" _news_left_image" alt="" src="{{ asset('images-quang/aqua1.jpg') }}" />
            <div class="_news_l">
              <div class="_news_l_date">20.04.2024</div>
              <span>
                <h3 class="_news_l_h">How to position your furniture for positivity</h3>
              </span>
              <p class="_news_l_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque.....
              </p>
            </div>
            <div class=" _news_l_b">
              <form action="{{Route('news.read')}}" method="POST">
                @csrf
                <button type="submit" class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                  Read More
                </button>
              </form>
            </div>
            <div class="flex py-3 justify-end border-t border-gray-500"></div>

          </div>
          <div>
            <img class=" _news_left_image" alt="" src="{{ asset('images-quang/aqua1.jpg') }}" />
            <div class="_news_l">
              <div class="_news_l_date">20.04.2024</div>
              <span>
                <h3 class="_news_l_h">How to position your furniture for positivity</h3>
              </span>
              <p class="_news_l_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque.....
              </p>
            </div>
            <div class=" _news_l_b">
              <form action="{{Route('news.read')}}" method="POST">
                @csrf
                <button type="submit" class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                  Read More
                </button>
              </form>
            </div>
            <div class="flex py-3 justify-end border-t border-gray-500"></div>

          </div>
          <div>
            <img class=" _news_left_image" alt="" src="{{ asset('images-quang/aqua1.jpg') }}" />
            <div class="_news_l">
              <div class="_news_l_date">20.04.2024</div>
              <span>
                <h3 class="_news_l_h">How to position your furniture for positivity</h3>
              </span>
              <p class="_news_l_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem.....
              </p>
            </div>
            <div class=" _news_l_b">
              <form action="{{Route('news.read')}}" method="POST">
                @csrf
                <button type="submit" class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                  Read More
                </button>
              </form>
            </div>
            <div class="flex py-3 justify-end border-t border-gray-500"></div>

          </div>
        </div>
      </div>
      <div class="right-news h-fit rounded-lg ">
        <div class="_news_r">
          <span class="text-xl mb-1 font-bold text-gray-900 sm:text-xl">Related events</span>
        </div>
        <div class="flex justify-end border-t border-gray-500"></div>
        <div>
          <ul>
            <li class="_new_r">
              <div class="flex">
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
                <div class="_btn_left">
                  <form action="{{Route('news.read')}}" method="POST">
                    @csrf
                    <button type="submit" class="block mr-0.5 rounded-xl bg-gray-800 px-3 py-2 text-sm text-white transition hover:bg-black">
                      Detail
                    </button>
                  </form>
                </div>
                <div>
                  <a href="{{Route('ticket.view')}}" class="block rounded-xl bg-gray-800 px-2 py-2 text-sm text-white transition hover:bg-black">
                    Buy now
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="__line_2"></div>
        <div>
          <ul>
            <li class="_new_r">
              <div class="d-flex">
                <a href="">
                  <img src="{{ asset('images-quang/aqua1.jpg') }}" alt="" class="">
                </a>
                <div class="_name">
                  <a href="">
                    <h3 class="event_name mt-2"><strong>News name</strong></h3>
                  </a>
                  <dl class="_news_r_ticket mt-1">
                    <div class="d-flex">
                      <dt class="inline">Date:</dt>
                      <dd class="inline">20.04.2024</dd>
                    </div>
                    <div class="d-flex">
                      <dt class="inline">Ticket:</dt>
                      <dd class="inline">299.000đ</dd>
                    </div>
                  </dl>
                </div>
              </div>
              <div class="_new_r_form">
                <div class="_btn_left">
                  <form action="{{Route('news.read')}}" method="POST">
                    @csrf
                    <button type="submit" class="block mr-0.5 rounded-xl bg-gray-800 px-3 py-2 text-sm text-white transition hover:bg-black">
                      Detail
                    </button>
                  </form>
                </div>
                <div>
                  <a href="{{Route('ticket.view')}}" class="block rounded-xl bg-gray-800 px-2 py-2 text-sm text-white transition hover:bg-black">
                    Buy now
                  </a>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="__line_2"></div>

      </div>
    </div>
  </div>
</div>
@endsection