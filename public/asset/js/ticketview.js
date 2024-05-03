   // add cart function
   function addToCart() {
      var quantity = $("#quantity").val();
      var ticketId = "{{ $ticket->id }}";
      $.ajax({
         url: "{{ route('cart.add') }}",
         method: 'POST',
         contentType: 'application/json',
         data: JSON.stringify({
            ticket_id: ticketId,
            quantity: quantity,
            _token: "{{ csrf_token() }}"
         }),
         success: function(response) {
            if (response.success) {
               // console.log(response);
               updateCartCount();
               showNotification('Tickets added to cart!');
            } else {
               if (response.message === 'The quantity exceeds the remaining stock.') {
                  showNotification(response.message);
               }
            }
         },
         error: function(xhr, status, error) {
            console.log('error add cart');
         }
      });
   }
   //Thông báo 
   function showNotification(message) {
      const notification = document.createElement('div');
      notification.classList.add('notificationAddcart');
      notification.textContent = message;
      document.body.appendChild(notification);
      setTimeout(() => {
         notification.remove();
      }, 3000);
   }
   ////check stock quantity
   document.addEventListener("DOMContentLoaded", function() {
      checkStock();
   });
   var ticketID = $('input[name="ticket_id"]').val();

   function checkStock() {
      $.ajax({
            url: "{{ route('checkStock') }}",
            type: "GET",
            data: {
               ticket_id: ticketID,
            },
         })
         .done(function(response) {
            var stockStatusElement = $('#stockStatus');
            if (response.status === 'instock') {
               stockStatusElement.text(response.stock + " ticket in stock");
            } else if (response.status === 'outstock') {
               stockStatusElement.text("Sold out");
            }

         })
         .fail(function(xhr, status, error) {});
   }
   ///quantity button click
   function decreaseQuantity() {
      var quantityInput = document.getElementById("quantity");
      var currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
         quantityInput.value = currentValue - 1;
      }
   }

   function increaseQuantity() {
      var quantityInput = document.getElementById("quantity");
      var currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
   }
   ///
   // buy now button 
   document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('buyNowBtn').addEventListener('click', function() {
         addToCartAndCheckout();
      });
   });

   function addToCartAndCheckout() {
      var form = $('form[action="' + "{{ route('cart.add') }}" + '"]');
      var formData = new FormData(form[0]);
      $.ajax({
         url: form.attr('action'),
         method: 'POST',
         data: formData,
         processData: false,
         contentType: false,
         success: function(response) {
            if (response.success) {
               window.location.href = "{{ route('checkout.view') }}";
            } else {
               alert(response.message);
            }
         },
         error: function(xhr, status, error) {
            console.error(error);
         }
      });
   }