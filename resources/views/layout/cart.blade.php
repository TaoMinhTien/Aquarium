@extends('welcome')
@section('title', 'Cart')
@section('content')

<div class="container-quang">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="mx-auto max-w-3xl">
      <div class="text-center">
        <h1 class="text-xl py-3 font-bold text-gray-900 sm:text-3xl">Your Cart</h1>
      </div>
      <div class="flex  justify-end border-t border-gray-300"></div>
      <div class="">
        <ul class="">
          <li class="flex items-center gap-2">
            <img
            src="{{ asset('images-quang/aqua1.jpg') }}"
              alt=""
              class="_cartimg py-6 w rounded object-cover"
            />
            <div>
              <h3 class="text-sm text-gray-900">Basic Tee 6-Pack</h3>
              <dl class=" text-gray-600">
                <div>
                  <dt class="_cartpricr inline">Size:</dt>
                  <dd class=" _cartpricr inline">XXS</dd>
                </div>

                <div>
                  <dt class="_cartpricr inline">Color:</dt>
                  <dd class="_cartpricr inline">White</dd>
                </div>
              </dl>
            </div>
            <div class="flex flex-1 items-center justify-end gap-2">
              <form>
                <input
                  type="number"
                  min="1"
                  value="1"
                  id="Line1Qty"
                  class="h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                />
              </form>
              <button class="text-gray-600 transition hover:text-red-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-4 w-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                  />
                </svg>
              </button>
            </div>
          </li>
        </ul>

        <div class=" flex justify-end border-t border-gray-100 pt-8">
          <div class="w-screen max-w-lg space-y-4">
            <dl class="space-y-0.5 text-sm text-gray-700">
              <div class="flex justify-between">
                <dt>Subtotal</dt>
                <dd>£250</dd>
              </div>

              <div class="flex justify-between">
                <dt>VAT</dt>
                <dd>£25</dd>
              </div>
              <div class="flex justify-between">
                <dt>Discount</dt>
                <dd>-£20</dd>
              </div>
              <div class="flex justify-between !text-base font-medium">
                <dt>Total</dt>
                <dd>£200</dd>
              </div>
            </dl>
            <div class="flex justify-end">
            <a
                href=""
                class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black"
              >
                Back
              </a>
              <a
                href="/checkout"
                class="block rounded-xl bg-gray-800 px-3 py-2 text-sm text-white transition hover:bg-black"
              >
                Checkout
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection