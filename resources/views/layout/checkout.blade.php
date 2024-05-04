@extends('welcome')
@section('title', 'Checkout')
@section('content')

<div class="container-quang">
   <div class=" px-4 w-screen py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="">
         <div class="text-center">
            <h1 class="text-xl  font-bold text-gray-900 sm:text-3xl">Check Out</h1>
         </div>
         <div class="flex py-3 justify-end border-t border-gray-700 mt-3"></div>
         <form action="{{route('checkout.process')}}" method="post">
            @csrf
            <div class="grid grid-cols-1 gap-1 px-10 lg:grid-cols-3 lg:gap-1">
               <div class="h-fit	 rounded-lg  lg:col-span-2">
                  <div class="h-fit  border bg-white  border-slate-500 rounded-lg lg:col-span-2">
                     <div class="flex justify-start">
                        <span class=" mt-4 ml-6 mb-4 text-gray-700">Billing Details</span>
                     </div>
                     <div class="flex justify-end my-0 border-t border-gray-300"></div>
                     <div class="rounded-lg  p-4  lg:col-span-3 lg:p-12">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                           <div>
                              <input value="{{ old('name', session('userData.name')) }}" class="w-full border rounded-lg border-gray-700 p-3 lg:p-3 text-sm" placeholder="Name" name="name" type="name" id="name" />
                              @error('name')
                              <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                                 <span class="block sm:inline text-xs">{{ $message }}</span>
                              </div>
                              @enderror
                           </div>
                           <div>
                              <input value="{{ old('phone', session('userData.phone')) }}" class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Phone Number" name="phone" type="tel" id="phone" />
                              @error('phone')
                              <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                                 <span class="block sm:inline text-xs">{{ $message }}</span>
                              </div>
                              @enderror
                           </div>
                        </div>
                        <div class="mt-2">
                           <input value="{{ old('email', session('userData.email')) }}" class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Email Address" name="email" type="email" id="email" />
                           @error('email')
                           <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                              <span class="block sm:inline text-xs">{{ $message }}</span>
                           </div>
                           @enderror
                        </div>
                        <div class="mt-2">
                           <input value="{{ old('address', session('userData.address')) }}" class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Address" type="text" name="address" id="address" />
                           @error('address')
                           <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                              <span class="block sm:inline text-xs">{{ $message }}</span>
                           </div>
                           @enderror
                        </div>
                        <div class="mt-2">
                           <textarea class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Note...." rows="3" lg:row='3' for="note" name="note" id="note"></textarea>
                           @error('note')
                           <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                              <span class="block sm:inline text-xs">{{ $message }}</span>
                           </div>
                           @enderror
                        </div>
                     </div>
                  </div>
               </div>
               <div class="h-max rounded-lg border bg-white  border-slate-300">
                  <div class="flex ml-4 mt-4 justify-start  ">
                     <span class=" mb-4 text-gray-700">Your Order</span>
                  </div>
                  <div class="flex justify-end my-0 border-t border-gray-300"></div>
                  <div>
                     @if(!empty($cartCheckout))
                     @foreach($cartCheckout as $item)
                     <div class="flex px-2 mt-1 justify-between">
                        <div>
                           <p class="text-sm">{{ $item['name'] }} x {{ $item['quantity'] }}</p>
                           @if(isset($item['start_date']))
                           <p class=" text-xs text-gray-800">Start date: {{$item['start_date']}}</p>
                           @else
                           <p class="text-xs text-gray-800">No date</p>
                           @endif
                        </div>
                        <div>
                           <span class=" text-sm">{{ number_format($item['price']/ 1000, 3, ',', ',') }}đ</span>
                        </div>
                     </div>
                     <div class="flex justify-end my-2 border-t border-gray-300"></div>
                     @endforeach
                     <div class="flex px-2 mb-1 justify-start">
                        <span class=" text-xs text-gray-800">{{ $cartQuantity }} Ticket</span>
                     </div>
                     <div class="flex px-2 mb-1 justify-start">
                        <span class=" text-sm">Total price: {{ number_format($total/ 1000, 3, ',', ',') }}đ</span>
                     </div>
                     <!--  -->
                     <div class="px-2 mt-2">
                        <div class="flex mb-1 items-center">
                           <input id="qr" value="qr" type="radio" name="paymentmethod" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                           <label for="qr" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">QR code</label>
                        </div>
                        <div class="flex mb-1 items-center">
                           <input id="bank" value="bank" type="radio" name="paymentmethod" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 " checked>
                           <label for="bank" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chuyển khoản</label>
                        </div>
                        <div class="flex items-center">
                           <input id="meet" value="meet" type="radio" name="paymentmethod" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                           <label for="meet" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thanh toán khi vào cổng</label>
                        </div>
                     </div>
                     <!--  -->
                     <div class="flex py-4 justify-center">
                        <a href="javascript:void(0);" onclick="window.history.back()" class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                           Back
                        </a>
                        <button type="submit" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                           Next
                        </button>
                     </div>
                     @else
                     <div class="flex mt-1 ml-2">
                        <p class="text-[15px] italic mr-3  text-gray-700">No ticket!</p>
                        <a class=" text-[15px] italic text-blue-600 hover:text-blue-800" href="{{ route('tickets') }}">Shopping Here</a>
                     </div>
                     <div class="flex mt-2 justify-end border-t border-gray-200"></div>
                     @endif
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection