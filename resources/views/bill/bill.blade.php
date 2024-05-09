@extends('admin.dashboard')
@section('title', 'Bill')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">Bill</h2>
   <div class="flex mt-2 items-center justify-center">
      <table class="w-full divide-y-2 divide-gray-400 bg-white text-sm">
         <thead class="ltr:text-left rtl:text-right">
            <tr>
               <th class=" px-4 py-2  font-medium text-gray-900">Name</th>
               <th class=" px-4 py-2 font-medium text-gray-900">Order number</th>
               <th class=" px-4 py-2 font-medium text-gray-900">Status</th>
               <th class=" px-4 py-2 font-medium text-gray-900">Total amount</th>
               <th class=" font-medium text-gray-900"><span class="mr-4">Action</span></th>
            </tr>
         </thead>
         <tbody class="divide-y mt-2 divide-gray-200">
            @if (isset($bookings))
            @foreach ($bookings as $value)
            <tr class="mt-2">
               <td class=" px-4 py-2 font-medium text-gray-700">{{ $value ->customer->name }}</td>
               <td class=" px-4 py-2 font-medium text-gray-700">{{ $value->orderNumber ? $value->orderNumber->order_number : 'N/A'}}</td>
               <td class=" px-4 py-2 font-medium text-gray-700">{{ $value ->status }}</td>
               <td class=" px-4 py-2 font-medium text-gray-700">{{ number_format($value ->totalmount/ 1000, 3, ',', ',') }}đ</td>
               <td>
                  <form action="{{route('booking.detail')}}" method="POST">
                     @csrf
                     <input type="hidden" name="booking_id" value="{{ $value ->id }}">
                     <button class="bg-blue-600 hover:bg-blue-700 mr-4 text-white font-bold py-2 px-4 rounded-full">
                        Detail
                     </button>
                  </form>
               </td>
            </tr>
            @endforeach
            @endif
         </tbody>
      </table>
   </div>
   <div class="mt-3 flex justify-center">
      <div class="p-1">{{ $bookings->links() }}</div>
   </div>
</div>

@endsection