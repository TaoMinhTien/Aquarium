@extends('welcome')
@section('title', 'Checkout')
@section('content')
<div class="container-quang">
   <div class="grid py-10 px-10 grid-cols-1 gap-2 lg:grid-cols-2 ">
      <div class=" rounded-lg ">
         @if ($payment == '')
         <div>
            <div class="flex items-center h-full w-full justify-center	">
               <img class="w-2/5" src="{{ asset('images-quang/qrbank.png') }}" alt="QR Bank">
            </div>
            <div class="flex justify-center">
               <table>
                  <tr>
                     <td class=" text-sm flex justify-end">Account name:</td>
                     <td class="text-sm px-4 ml-4">Aquarium</td>
                  </tr>
                  <tr>
                     <td class=" text-sm flex justify-end">Account number:</td>
                     <td class="text-sm px-4 ml-4">12345678999</td>
                  </tr>
                  <tr>
                     <td class="text-sm flex justify-end">Bank:</td>
                     <td class="text-sm px-4 ml-4">Vietcombank</td>
                  </tr>
                  <tr>
                     <td class="text-sm flex justify-end">Total:</td>
                     <td class="text-sm px-4 ml-4"> {{ number_format($total/ 1000, 3, ',', ',') }}đ </td>
                  </tr>
                  <tr>
                     <td class=" text-sm flex justify-end">Memo:</td>
                     <td class="text-sm px-4 ml-4"><strong class="text-red-600">{{$orderNumber}}</strong></td>
                  </tr>
               </table>
            </div>
         </div>
         @endif

      </div>
      <div class=" rounded-lg ">
         <form action="{{Route('handlecheckout.checkout')}}" method="POST">
            @csrf
            <div class="ml-3 mr-3 mt-3">
               <div class="flex justify-start">
                  <span class="text-gray-800 text-sm italic">Thank you. Your order has been received!</span>
               </div>
               <div class="mt-3 ml-3 lg:mt-3 lg:ml-3 ">
                  <ul>
                     <li class="text-xs text-black ">Order number: <strong>{{$orderNumber}}</strong></li>
                     <li class="text-xs ">Date: <strong>{{$time}}</strong></li>
                     <li class="text-xs ">Total price: <strong>{{ number_format($total/ 1000, 3, ',', ',') }}đ</strong></li>
                     <li class="text-xs ">Payment method: <strong>{{$payment}}</strong></li>
                  </ul>
               </div>
               <div class="flex mt-2 justify-between">
                  <div class="text-gray-800 text-sm">Order Detail</div>
                  <div class="text-gray-800 text-sm">Order Total</div>
               </div>
            </div>
            <div class="flex justify-end border-t  border-gray-600"></div>
            <div class="ml-3 mr-3 mt-3">
               @foreach($cartCheckout as $item)
               <div class="flex justify-between">
                  <div>
                     <span class="text-[12px]">{{ $item['name'] }} x {{ $item['quantity'] }}</span>
                     @if(isset($item['start_date']))
                     <p class=" text-xs text-gray-800">Start date: {{$item['start_date']}}</p>
                     @else
                     <p class="text-xs text-gray-800">No date</p>
                     @endif
                  </div>
                  <div class="flex items-center">
                     <div class="text-[12px]">{{ number_format( $item['price'] / 1000, 3, ',', ',') }}đ</div>
                  </div>
               </div>
               <div class="flex my-1 justify-end border-t border-gray-300"></div>
               @endforeach
               <div class="mt-3 lg:mt-3 ">
                  <ul>
                     <li class="text-xs mt-1 ">
                        Name: {{$name}}
                     </li>
                     <li class="text-xs mt-1 ">
                        Phone: {{$phone}}
                     </li>
                     <li class="text-xs mt-1 ">
                        Email: {{$email}}
                     </li>
                     <li class="text-xs mt-1 ">
                        Address: {{$address}}
                     </li>
                  </ul>
               </div>
               <div class="my-4 flex justify-center ">
                  <input type="hidden" name="total" value="{{$total}}">
                  <input type="hidden" name="ticketID" value="{{$total}}">
                  <input type="hidden" name="eventID" value="{{$total}}">
                  <a href="javascript:void(0);" onclick="window.history.back()" class="mr-1 text-sm rounded-xl text-white px-12 py-2 font-medium bg-gray-800 hover:bg-black">
                     Back
                  </a>
                  <button type="submit" class=" text-sm rounded-xl text-white px-10 py-2 font-medium bg-gray-800 hover:bg-black">
                     Confirm
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

@endsection