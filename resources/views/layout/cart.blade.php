@extends('welcome')
@section('title', 'Cart')
@section('content')
<div class="container-quang">
  <div id="updateTotalCartUrl" data-url="{{ route('update.total.cart') }}"></div>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="mx-auto max-w-3xl">
      <div class="text-center">
        <h1 class="text-xl py-3 font-bold text-gray-900 sm:text-3xl">Your Cart</h1>
      </div>
      <div class="flex justify-end mb-2 border-t border-gray-800"></div>
      <div class="">
        <ul class="">
          @if(!empty($cartItems))
          @foreach($cartItems as $item)
          <li class="flex gap-2 mb-1">
            @if(isset($item['image']))
            <img src="{{ asset('news_img/' . $item['image']) }}" alt="" class="_cart_img mb-2 rounded object-cover">
            @else
            <span class="text-red-500 text-sm">No image available</span>
            @endif
            <div class="mt-2 ml-2">
              <h3 class="text-sm font-bold text-gray-900"> {{ $item['name'] }}</h3>
              <dl class="text-gray-700">
                <div class="flex">
                  <dt class="_cartpricr">Price:</dt>
                  <dd class="ml-1 _cartpricr"> {{ number_format($item['price'] / 1000, 3, ',', ',') }}đ</dd>
                </div>
                <div class="flex">
                  <dt class="_cartpricr ">Date:</dt>
                  @if (isset($item['start_date'] ))
                  <dd class="_cartpricr  ml-1"> {{ $item['start_date'] }}</dd>
                  @else
                  <dd class="_cartpricr ml-1 "> No date</dd>
                  @endif
                </div>
              </dl>
            </div>
            <div class="flex flex-1 items-center justify-end gap-2">
              <form class="updateQuantityForm" data-ticket-id="{{ $item['ticket_id'] }}" method="post" action="{{ route('cart.update.quantity') }}">
                @csrf
                <input type="hidden" name="ticket_id" value="{{ $item['ticket_id'] }}">
                <button type="button" class="size-9 leading-10 text-gray-600 transition hover:opacity-75" onclick="decreaseQuantityCart({{ $item['ticket_id'] }})">
                  &minus;
                </button>
                <input type="number" name="quantity" value="{{ $item['quantity'] }}" id="quantity_{{ $item['ticket_id'] }}" class="h-6 w-10 border rounded border-gray-500 text-center sm:text-sm [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                <button type="button" class=" text-gray-600 transition hover:opacity-75" onclick="increaseQuantityCart({{ $item['ticket_id'] }})">
                  &plus;
                </button>
              </form>
              <form method="POST" action="{{ route('cart.remove') }}" class="remove-from-cart mt-1">
                @csrf
                <input type="hidden" name="ticket_id" value="{{ $item['ticket_id'] }}">
                <button class="text-gray-600 transition hover:text-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                </button>
              </form>
            </div>
          </li>
          @endforeach
          @else
          <div class="flex mb-2">
            <p class="my-2 text-[15px] italic mr-3  text-gray-700">No ticket in cart!</p>
            <a class="my-2 text-[15px] italic text-blue-700 hover:text-blue-800" href="/tickets">Shopping Here</a>
          </div>
          <div class="flex  justify-end mb-2 border-t border-gray-800"></div>
          @endif
        </ul>
        <div class="flex mt-1 justify-end">
          <span class="text-gray-700 text-sm ">
            <p id="totalItems"></p>
          </span>
        </div>
        <div class=" flex justify-end border-t border-gray-100 pt-8">
          <div class="w-screen max-w-lg space-y-4">
            <dl class="space-y-0.5 text-sm text-gray-700">
              <div class="flex justify-between !text-base font-medium">
                <dt>Total</dt>
                <dd id="cartTotal"></dd>
              </div>
              <div class="flex justify-between">
                <dt>VAT</dt>
                <dd>0%</dd>
              </div>
              <div class="flex justify-between">
                <dt>Discount</dt>
                <dd id="discountInCart"></dd>
              </div>
              <div class="flex justify-between !text-base font-medium">
                <dt>Subtotal</dt>
                <dd id="cartSubtotal"></dd>
              </div>
            </dl>
            <div class="flex justify-end">
              <a href="javascript:void(0);" onclick="window.history.back()" class="block mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
                Back
              </a>
              <a href="/checkout" class="block rounded-xl bg-gray-800 px-3 py-2 text-sm text-white transition hover:bg-black">
                Checkout
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    updateQuantity();
    decreaseQuantityCart();
    increaseQuantityCart();
    getTotalItems();
    updateTotalInCart();

  });
  //////
  function updateTotalInCart() {
    var updateTotalCartUrlElement = document.getElementById('updateTotalCartUrl');
    if (updateTotalCartUrlElement) {
      var updateTotalCartUrl = document.getElementById('updateTotalCartUrl').getAttribute('data-url');
      $.ajax({
        url: updateTotalCartUrl,
        method: 'GET',
      }).done(function(response) {
        var totalVND = response.dataTotal.total.toLocaleString('vi-VN', {
          style: 'currency',
          currency: 'VND'
        });
        var subtotalVND = response.dataTotal.subtotal.toLocaleString('vi-VN', {
          style: 'currency',
          currency: 'VND'
        });
        var discountVND = response.dataTotal.discount.toLocaleString('vi-VN', {
          style: 'currency',
          currency: 'VND'
        });
        $('#cartTotal').text(totalVND);
        $('#discountInCart').text(discountVND);
        $('#cartSubtotal').text(subtotalVND);
      }).fail(function(xhr, status, error) {
        // 
      });
    }
  }
  updateTotalInCart();
  ////
  function deleteFormCart() {
    $('form.remove-from-cart').on('submit', function(e) {
      e.preventDefault();
      var form = $(this);
      var url = form.attr('action');
      var method = form.attr('method');
      var data = form.serialize();
      $.ajax({
          url: url,
          type: method,
          data: data,
        })
        .done(function(response) {
          if (response.success) {
            updateTotalInCart();
            updateCartCount();
            getTotalItems();
            updateTotalInCart();
            showNotification('Removed from cart!')
            form.closest('li').remove();
          } else {
            // console.log(response.error);
          }
        })
        .fail(function(xhr, status, error) {
          // console.error("error:", error);
        });
    });
  }
  deleteFormCart();
  //////
  function getTotalItems() {
    $.ajax({
        url: "{{route('gettotalitems')}}",
        type: "GET",
      })
      .done(function(response) {
        if (response.success) {
          $('#totalItems').text(response.totalItems + ' items');
        }
      })
      .fail(function(xhr, status, error) {
        // console.error("error:", error);
      });
  }
  getTotalItems();



  ///
  function showNotification(message) {
    const notification = document.createElement('div');
    notification.classList.add('notificationAddcart');
    notification.textContent = message;
    document.body.appendChild(notification);
    setTimeout(() => {
      notification.remove();
    }, 2100);
  }
  ////
  function updateQuantity(ticketId) {
    var form = document.querySelector('.updateQuantityForm[data-ticket-id="' + ticketId + '"]');
    if (form) {
      var formData = new FormData(form);
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
              // console.log(response);
              updateTotalInCart();
              updateCartCount();
            } else {
              if (response.message === 'The quantity exceeds the remaining stock.') {
                showNotification(response.message);
                // $('#notInStock').text(response.message);
              }
            }
          }
        }
      };

      xhr.open('POST', form.action);
      xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
      xhr.send(formData);
    } else {
      // console.error( ticketId + ' not found.');
    }
  }

  function decreaseQuantityCart(ticketId) {
    var quantityInput = document.getElementById('quantity_' + ticketId);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
      updateQuantity(ticketId);
    }
  }

  function increaseQuantityCart(ticketId) {
    var quantityInput = document.getElementById('quantity_' + ticketId);
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
    updateQuantity(ticketId);
  }
</script>
<!--  -->
@endsection