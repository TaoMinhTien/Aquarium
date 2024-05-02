<div id="ticket_all" class="grid px-8 gap-3 grid-cols-2 lg:grid-cols-4 lg:gap-4"></div>
<div id="ticket_all" class="grid px-8 gap-3 grid-cols-2 lg:grid-cols-4 lg:gap-4"></div>
<div class="flex w-full items-center mt-10 justify-center ">
   <button id="loadMoreTicket" class="text-gray-900  hover:underline">Load more</button>
</div>
<script>
   document.addEventListener("DOMContentLoaded", function() {
      loadMoreTicket();
   });
   var currentPage = 0;
   var isLoading = false;

   function loadMoreTicket() {
      if (isLoading) return;
      isLoading = true;
      $.ajax({
         url: "{{ route('tickets.get') }}",
         type: 'GET',
         data: {
            page: currentPage
         },
         success: function(response) {
            var html = '';
            if (response.ticket.length > 0) {
               response.ticket.forEach(function(value) {
                  var ticketVND = value.price.toLocaleString('vi-VN', {
                     style: 'currency',
                     currency: 'VND'
                  });
                  html += `
                     <div class="rounded-lg">
                        <form action="{{ route('ticket.view') }}" method="POST">
                           <ul>
                                 <li>
                                    <a class="group block">
                                       <img class="aspect-square w-full _ticektimg rounded object-cover" src="{{ asset('news_img/') }}/${value.image}" alt="" />
                                       <div class="mt-3 ml-2">
                                             <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                                ${value.name}
                                             </h3>
                                             <p class="mt-1 text-sm text-gray-700">${ticketVND}</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="flex mt-2 ml-2 justify-start ">
                                    <input type="hidden" name="ticket_id" value="${value.id}">
                                    <input type="hidden" name="event_id" value="${value.event_id}">
                                    <button type="submit" class="rounded-xl bg-gray-800 lg:px-10 px-4 py-2 text-sm text-white transition hover:bg-black">
                                       Buy now
                                    </button>
                                 </li>
                           </ul>
                        </form>
                     </div>
                  `;
               });
               $('#ticket_all').append(html);
               isLoading = false;
               currentPage++;
            }
            if (response.ticket.length === 0) {
               $('#loadMoreTicket').text('End').prop('disabled', true).addClass('sold-out-ticket');
            }
         },
         error: function(xhr, status, error) {
            console.error(error);
            isLoading = false;
         }
      });
   }
   $('#loadMoreTicket').click(function() {
      loadMoreTicket();
   });
</script>