@extends('welcome')
@section('title', 'Checkout')
@section('content')

<div class="container-quang">
   <div class=" px-4 w-screen py-8 sm:px-6 sm:py-12 lg:px-8">
      <div class="">
         <div class="text-center">
            <h1 class="text-xl  font-bold text-gray-900 sm:text-3xl">Checkout</h1>
         </div>
         <div class="flex py-3 justify-end border-t border-gray-300"></div>
         <div class="grid grid-cols-1 gap-1 lg:grid-cols-3 lg:gap-1">
            <div class="h-max	 rounded-lg  lg:col-span-2">
               <form action="" method="post">
                  @csrf
                  <div class="h-full  border bg-white  border-slate-500 rounded-lg lg:col-span-2">
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
                                 <span class="block sm:inline text-[10px]">{{ $message }}</span>
                              </div>
                              @enderror
                           </div>
                           <div>
                              <input value="{{ old('phone', session('userData.phone')) }}" class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Phone Number" name="phone" type="tel" id="phone" />
                              @error('phone')
                              <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                                 <span class="block sm:inline text-[10px]">{{ $message }}</span>
                              </div>
                              @enderror
                           </div>
                        </div>
                        <div class="mt-2">
                           <input value="{{ old('email', session('userData.email')) }}" class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Email Address" name="email" type="email" id="email" />
                           @error('email')
                           <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                              <span class="block sm:inline text-[10px]">{{ $message }}</span>
                           </div>
                           @enderror
                        </div>
                        <div class="mt-2">
                           <input value="{{ old('address', session('userData.address')) }}" class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Address" type="text" name="address" id="address" />
                           @error('address')
                           <div class="mt-0 text-red-700 rounded-xl relative" role="alert">
                              <span class="block sm:inline text-[10px]">{{ $message }}</span>
                           </div>
                           @enderror
                        </div>
                        <div class="mt-2">
                           <textarea class="w-full border rounded-lg border-gray-700 p-3 text-sm" placeholder="Ghi chú...." rows="3" lg:row='3' for="note" name="note" id="note"></textarea>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="h-max rounded-lg border bg-white  border-slate-300">
               <div class="flex ml-4 mt-4 justify-start  ">
                  <span class=" mb-4 text-gray-700">Your Order</span>
               </div>
               <div class="flex justify-end my-0 border-t border-gray-300"></div>



               <div class="flex py-5 justify-center">
                  <a href="/cart" class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                     Back
                  </a>
                  <a href="/" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                     Next
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection