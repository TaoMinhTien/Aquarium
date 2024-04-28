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
        <h2 class="text-xl mb-2 font-bold text-gray-900 sm:text-3xl">Evens</h2>
        <div class="flex justify-end border-t border-gray-500"></div>
        <div class="_news_left">
          <div>
            @foreach ($formattedEvents as $event)

            @if (isset($event['image_file_names']) && count($event['image_file_names']) > 0)
            <img alt="" src="{{ asset('news_img/' . $event['image_file_names'][0]) }}" />
            @else
            <img alt="No image" src="" />
            @endif
            @if (isset($event['text']))
            <div class="_news_l">
              <div class="_news_l_date">{{ $event['event']->start_date }}</div>
              <p class="_news_l_text">
                {{ $event['text'] }}
              </p>
            </div>
            @else
            <p class="_news_l_text">
              No text
            </p>
            @endif
            <div class="mt-2 mb-3">
              <form action="{{ route('news.read', ['id' => isset($event['event']) ? $event['event']->id : null]) }}" method="POST">
                @csrf
                <button type="submit" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                  Read More
                </button>
              </form>

            </div>
            <div class="flex py-3 justify-end border-t border-gray-500"></div>
            @endforeach
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
                  <form method="POST">
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
                  <form action="" method="POST">
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
  <div class="flex w-full items-center mt-10 justify-center ">
    <button class="text-gray-800  hover:underline">Load more</button>
  </div>

  @endsection