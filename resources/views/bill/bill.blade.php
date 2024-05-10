@extends('admin.dashboard')
@section('title', 'Bill')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">Bill</h2>
   <div class="w-full mt-3">
      <div class="grid  grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-5">
         <div class=" rounded-lg  ">
            <div class="space-y-2">
               <div>
                  <div class="relative">
                     <input type="text" id="ordernumber" name="ordernumber" placeholder="Order number..." class="w-full rounded-md border border-gray-500 py-2 pe-10 sm:text-sm" />
                     <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                        <button id="searchButton" type="button" class="text-gray-600 hover:text-gray-700">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                           </svg>
                        </button>
                     </span>
                  </div>
               </div>
               <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                  <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-2 text-gray-900 transition">
                     <span class="text-sm font-medium">Filter </span>
                     <span class="transition group-open:-rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                     </span>
                  </summary>
                  <div class="border-t border-gray-200 bg-white">
                     <ul id="statusFilter" class="space-y-1 border-t border-gray-200 p-4">
                        <li>
                           <label for="confirmed" class="inline-flex items-center gap-2">
                              <input type="checkbox" id="confirmed" name="status[]" value="confirmed" class="size-5 rounded border-gray-300" />
                              <span class="text-sm font-medium text-gray-700">confirmed </span>
                           </label>
                        </li>
                        <li>
                           <label for="pending" class="inline-flex items-center gap-2">
                              <input type="checkbox" id="pending" name="status[]" value="pending" class="size-5 rounded border-gray-300" />
                              <span class="text-sm font-medium text-gray-700">pending </span>
                           </label>
                        </li>
                     </ul>
                  </div>
               </details>
            </div>
         </div>
         <div class=" rounded-lg lg:col-span-3">
            <table class="w-full mb-5 divide-y-2 divide-gray-400 bg-white text-sm">
               <thead class="ltr:text-left rtl:text-right">
                  <tr>
                     <th class=" px-4 py-2  font-medium text-gray-900">Name</th>
                     <th class=" px-4 py-2 font-medium text-gray-900">Order number</th>
                     <th class=" px-4 py-2 font-medium text-gray-900">Status</th>
                     <th class=" px-4 py-2 font-medium text-gray-900">Total amount</th>
                     <th class=" font-medium text-gray-900"><span class="mr-4">Action</span></th>
                  </tr>
               </thead>
               <tbody id="billList" class="divide-y mt-2 divide-gray-200">
               </tbody>
            </table>
         </div>
      </div>
   </div>

</div>
<script>
   $(document).ready(function() {
      getBookings([]);
      $('#statusFilter').change(function() {
         var statuses = $(this).find('input[name="status[]"]:checked').map(function() {

            return $(this).val();
         }).get();
         getBookings(statuses);
      });

      $('#searchButton').click(function() {
         var orderNumber = $('#ordernumber').val().trim();
         if (orderNumber !== '') {
            getBookingsByOrderNumber(orderNumber);
         } else {
            getBookings([]);
         }
      });
   });
   ///
   function getBookingsByOrderNumber(orderNumber) {
      $.ajax({
         url: "{{ route('bill.filter') }}",
         method: 'GET',
         data: {
            order_number: orderNumber,
         },
         success: function(response) {
            var bookingsHtml = '';
            response.bookings.forEach(function(booking) {
               var VND = booking.totalmount.toLocaleString('vi-VN', {
                  style: 'currency',
                  currency: 'VND'
               });
               var bookingDetailUrl = "{{ route('booking.detail', ['id' => ':bookingId' ]) }}";
               bookingDetailUrl = bookingDetailUrl.replace(':bookingId', booking.id);
               var bookingHtml = '<tr class="mt-2">' +
                  '<td class="px-4 py-2 font-medium text-gray-700">' + booking.customer.name + '</td>' +
                  '<td class="px-4 py-2 font-medium text-red-700">' + (booking.order_number ? booking.order_number.order_number : 'N/A') + '</td>' +
                  '<td class="px-4 py-2 font-medium text-red-700">' + booking.status + '</td>' +
                  '<td class="px-4 py-2 font-medium text-gray-700">' + VND + '</td>' +
                  '<td>' +
                  '<form action="' + bookingDetailUrl + '" method="GET">' +
                  '@csrf' +
                  '<button class="bg-blue-600 hover:bg-blue-700 mr-4 text-white font-bold py-2 px-4 rounded-full">' +
                  'Detail' +
                  '</button>' +
                  '</form>' +
                  '</td>' +
                  '</tr>';
               bookingsHtml += bookingHtml;
            });
            $('#billList').html(bookingsHtml);
         },
         error: function(xhr, status, error) {
            console.error(xhr.responseText);
         }
      });
   }
   //
   function getBookings(statuses) {
      $.ajax({
         url: "{{ route('bill.filter') }}",
         method: 'GET',
         data: {
            status: statuses,
         },
         success: function(response) {
            var bookingsHtml = '';
            response.bookings.forEach(function(booking) {
               var VND = booking.totalmount.toLocaleString('vi-VN', {
                  style: 'currency',
                  currency: 'VND'
               });
               var bookingDetailUrl = "{{ route('booking.detail', ['id' => ':bookingId' ]) }}";
               bookingDetailUrl = bookingDetailUrl.replace(':bookingId', booking.id);
               var bookingHtml = '<tr class="mt-2">' +
                  '<td class="px-4 py-2 font-medium text-gray-700">' + booking.customer.name + '</td>' +
                  '<td class="px-4 py-2 font-medium text-gray-700">' + (booking.order_number ? booking.order_number.order_number : 'N/A') + '</td>' +
                  '<td class="px-4 py-2 font-medium text-red-700">' + booking.status + '</td>' +
                  '<td class="px-4 py-2 font-medium text-gray-700">' + VND + '</td>' +
                  '<td>' +
                  '<form action="' + bookingDetailUrl + '" method="GET">' +
                  '@csrf' +
                  '<button class="bg-blue-600 hover:bg-blue-700 mr-4 text-white font-bold py-2 px-4 rounded-full">' +
                  'Detail' +
                  '</button>' +
                  '</form>' +
                  '</td>' +
                  '</tr>';
               bookingsHtml += bookingHtml;
            });
            $('#billList').html(bookingsHtml);
         },
         error: function(xhr, status, error) {
            console.error(xhr.responseText);
         }
      });
   }
</script>

@endsection