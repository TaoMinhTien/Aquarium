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
        <h2 class="text-xl mb-2 font-bold text-gray-900 sm:text-3xl">Events</h2>
        <div class="flex justify-end border-t border-gray-500"></div>
        <div class="_news_left">
          <div id="newsContainer"></div>
        </div>
      </div>
      <div class="right-news h-fit rounded-lg ">
        <div class="_news_r">
          <span class="text-xl ml-6 mb-3 font-bold text-gray-900 sm:text-xl">Related events</span>
        </div>
        <div class="flex justify-end border-t border-gray-500"></div>
        <div>
          <ul>
            @foreach ($tickets as $event)
            <li class="_new_r ml-6 my-2">
              <a data-event-id="{{ $event->event_id }}" id="detailViewBtn{{ $event->event_id}}">
                <div class="flex">
                  <span>
                    <img src="{{ asset('news_img/' . $event->image) }}" alt="" class="w-fit">
                  </span>
                  <div>
                    <div class="_name">
                      <a data-event-id="{{ $event->event_id }}" id="detailViewBtn{{ $event->event_id}}">
                        <h3 class="event_name mt-2"><strong>{{$event->name}}</strong></h3>
                      </a>
                      <a data-event-id="{{ $event->event_id }}" id="detailViewBtn{{ $event->event_id}}">
                        <dl class="_news_r_ticket mt-1">
                          <div class="d-flex">
                            <dt class="inline">Ticket:</dt>
                            <dd class="inline"> {{ number_format($event->price/ 1000, 3, ',', ',') }}đ</dd>
                          </div>
                        </dl>
                      </a>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <div class="flex justify-end border-t border-gray-400"></div>
            @endforeach
          </ul>
          <div class="flex justify-start mt-3 ml-6">
            <a href="/tickets" class="block rounded-xl bg-gray-900 px-8 py-2 text-sm text-white transition hover:bg-black">
              Show all
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex w-full items-center mt-10 justify-center">
    <button id="loadMoreBtn" class="text-gray-800 "></button>
  </div>
  <script>
    $('[id^="detailViewBtn"]').click(function(event) {
      event.preventDefault();
      var eventID = $(this).data('event-id');
      var EventViewUrl = "/news/read/" + eventID;
      window.location.href = EventViewUrl;
    });

    document.addEventListener("DOMContentLoaded", function() {
      getNews();

    });
    var currentPage = 1;
    var newsPerPage = 5;
    var totalNewsLoaded = 0;

    window.addEventListener('scroll', function() {
      if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        if (totalNewsLoaded >= currentPage * newsPerPage) {
          currentPage++;
          getNews();
        }
      }
    });

    function getNews() {
      $.ajax({
          url: "{{ route('get.news') }}",
          type: "GET",
          data: {
            page: currentPage,
            per_page: newsPerPage
          },
        })
        .done(function(response) {
          if (response && response.formattedEvents && response.formattedEvents.length > 0) {
            var news = response.formattedEvents;
            var newsItemsHtml = '';
            news.forEach(function(newsItem) {
              var newsItemId = (newsItem && newsItem.event && newsItem.event.id) ? newsItem.event.id : '';
              var newsReadForm = `
                  <form action="{{ route('news.read', ['id' => ':id']) }}" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="${newsItemId}">
                      <button type="submit" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                          Read More
                      </button>
                  </form>
              `;
              newsReadForm = newsReadForm.replace(':id', newsItemId);
              var startDateHtml = '';
              if (newsItem.event && newsItem.event.start_date) {
                startDateHtml = `<div class="_news_l_date">${newsItem.event.start_date}</div>`;
              }
              var imageSrc = (newsItem.image_file_names && newsItem.image_file_names.length > 0) ? `{{ asset('news_img/') }}/${newsItem.image_file_names[0]}` : '';
              var newsItemHtml = `
                  <div class="news-item">
                      <img class="rounded-lg" alt="${imageSrc ? '' : 'No image'}" src="${imageSrc}" />
                      <div class="_news_l">
                      ${startDateHtml}
                          <p class="_news_l_text">
                              ${newsItem.text} .........
                          </p>
                      </div>
                      <div class="mt-2 mb-3">
                          ${newsReadForm}
                      </div>
                      <div class="flex py-3 justify-end border-t border-gray-500"></div>
                  </div>
              `;
              newsItemsHtml += newsItemHtml;
              $('#newsItemId').val(newsItemId);
            });
            $('#newsContainer').append(newsItemsHtml);
            totalNewsLoaded += response.formattedEvents.length;
            if (response.has_more == false) {
              $('#loadMoreBtn').text('End').prop('disabled', true);
            }
          }
        })
        .fail(function(xhr, status, error) {
          console.error(error);
        });
    }
  </script>



  @endsection