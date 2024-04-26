@extends('welcome')
@section('title', 'News')
@section('content')

<div class="container-quang">
   <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-10">
         <div class="lg:py-24">
            <h2 class="text-3xl font-bold sm:text-4xl">Ticket name</h2>
            <p class="mt-4 text-gray-700">
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
               eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
               quidem quam repellat.
            </p>
            <div class="py-1">
               <form method="POST">
                  @csrf
                  <div class="flex">
                     <div class="w-full">
                        <input type="hidden" name="discountPercent" id="discountPercent" value="">
                        <select for="size" name="size" id="size" class="text-[12px] border-gray-400 rounded border w-2/6 mt-1 p-1 text-gray-700 hover:text-blue-700">
                           <option for="size" value="selectsize" hidden selected>Select quantity</option>
                           <option for="size" value="">1</option>
                           <option for="size" value="">2</option>
                        </select>
                     </div>
                  </div>
               </form>
            </div>
            <div class="flex py-3">
               <div class="mr-1">
                  <form action="{{Route('tickets.buy')}}" method="post">
                     @csrf
                     <button type="submit" class="block rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                        Add to cart
                     </button>
                  </form>
               </div>
               <div class="">
                  <form action="{{Route('tickets.buy')}}" method="post">
                     @csrf
                     <button type="submit" class="block rounded-xl bg-gray-800 px-6 py-2 text-sm text-white transition hover:bg-black">
                        Buy now
                     </button>
                  </form>
               </div>
            </div>
         </div>
         <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
            <img alt="" src="{{ asset('images-quang/aqua1.jpg') }}" class="absolute inset-0 h-full w-full object-cover" />
         </div>
      </div>
   </div>
   <p class="text-xl mt-4 flex justify-center font-bold text-gray-900 sm:text-3xl">Tickets</p>
   <div class="flex pb-4 justify-end border-t border-gray-500"></div>
   <p class="px-10 text-gray-700">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat.eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat.eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat.eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
      eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
      quidem quam repellat.
   </p>
</div>
<p class="text-xl mt-4 flex justify-center font-bold text-gray-900 sm:text-3xl">Relate tickets</p>
<div class="flex pb-4 justify-end border-t border-gray-500"></div>
@include('layout.relate_ticket')
@endsection