@extends('admin.dashboard')
@section('title', 'Bill - Detail')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">Details</h2>
   <div class="flex mt-5 w-full items-center justify-center">
      <div class="flow-roo w-full mt-2">
         <dl class="-my-3 divide-y divide-gray-400 text-sm">
            <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
               <dt class="font-medium text-gray-900">Event</dt>
               <dd class="text-gray-700 sm:col-span-2">{{ $booking ->event->name_event }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
               <dt class="font-medium text-gray-900">Ticket</dt>
               <dd class="text-gray-700 sm:col-span-2">{{ $booking ->ticket->name }} x {{ $booking ->quantity }}</dd>
            </div>
            @if (isset($booking->event->start_date) || isset($booking->event->end_date))
            <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
               <dt class="font-medium text-gray-900">Date</dt>
               <dd class="text-gray-700 sm:col-span-2">
                  {{ $booking->event->start_date ?? 'N/A' }} - {{ $booking->event->end_date ?? 'N/A' }}
               </dd>
            </div>
            @endif
            <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
               <dt class="font-medium text-gray-900">Status</dt>
               <dd class=" text-red-700 sm:col-span-2">{{ $booking ->status }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
               <dt class="font-medium text-gray-900">Total Amount</dt>
               <dd class="text-gray-700 sm:col-span-2">{{ number_format($booking ->totalmount/ 1000, 3, ',', ',') }}đ</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-2 sm:grid-cols-3 sm:gap-4">
               <dt class="font-medium text-gray-900">Payment</dt>
               <dd class="text-gray-700 sm:col-span-2">{{ $booking ->payment->name }}</dd>
            </div>
         </dl>
      </div>
   </div>
   <div class="mt-4 flex">
      <ul>
         <li>
            <strong>Name: {{ $booking ->customer->name }}</strong>
         </li>
         <li>
            <strong>Phone: {{ $booking ->customer->phone }}</strong>
         </li>
         <li>
            <strong>Email: {{ $booking ->customer->email }}</strong>
         </li>
         <li>
            <strong>Address: {{ $booking ->customer->address }}</strong>
         </li>
         <li>
            <strong>Purchase count: {{ $booking ->customer->purchase_count }}</strong>
         </li>
         <li>
            <strong>Order Number: <span class="text-red-600">{{ $booking ->orderNumber->order_number }}</span></strong>
         </li>
      </ul>
   </div>
   <div class="mt-2">
      @if ($errors->has('status'))
      <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
         <span class="block sm:inline text-xs">{{ $errors->first('status') }}</span>
      </div>
      @endif
      <form action="{{route('detail.confirm')}}" method="POST">
         @csrf
         <div class="relative py-3 w-3/12">
            <input require type="text" id="status" name="status" placeholder="Status..." class="w-full rounded-md border border-gray-200 py-2 pe-10 shadow-sm sm:text-sm" />
         </div>
         <input type="hidden" name="booking_id" value="{{ $booking ->id}}">
         <button type="submit" class="bg-gray-900 hover:bg-black text-white font-bold py-2 px-3 rounded-full">
            confirm
         </button>
      </form>
   </div>
</div>

@endsection