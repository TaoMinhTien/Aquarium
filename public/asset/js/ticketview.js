document.addEventListener("DOMContentLoaded", function () {
   // add cart function
   var addToCartBtn = document.getElementById("addToCartBtn");
   function addToCart() {
      var quantity = $("#quantity").val();
      var ticketId = $("input[name='ticket_id']").val();
      var addToCartUrl = $('form').data('url');
      $.ajax({
         url: addToCartUrl,
         method: 'POST',
         contentType: 'application/json',
         data: JSON.stringify({
            ticket_id: ticketId,
            quantity: quantity,
            _token: "{{ csrf_token() }}"
         }),
         success: function (response) {
            console.log(response);
            if (response.success == true) {
               // console.log(response);
               updateCartCount();
               showNotification('Tickets added to cart!');
            } else {
               if (response.success== false ) {
                  showNotification('The quantity exceeds the remaining stock.');
               }
            }
         },
         error: function (xhr, status, error) {
            console.log('error add cart');
         }
      });
   }
   if (addToCartBtn) {
      addToCartBtn.addEventListener("click", addToCart);
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
   var ticketID = $('input[name="ticket_id"]').val();
   function checkStock() {
      var checkStockUrlElement = document.getElementById('checkStockUrl');
      var checkStockUrl = checkStockUrlElement ? checkStockUrlElement.getAttribute('data-url') : null;
      if (checkStockUrl) {
         $.ajax({
            url: checkStockUrl,
            type: "GET",
            data: {
               ticket_id: ticketID,
            },
         })
            .done(function (response) {
               var stockStatusElement = $('#stockStatus');
               if (response.status === 'instock') {
                  stockStatusElement.text(response.stock + " ticket in stock");
               } else if (response.status === 'outstock') {
                  stockStatusElement.text("Sold out");
               }

            })
            .fail(function (xhr, status, error) { });
      }
   }

   checkStock();

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
   document.getElementById('increaseQuantityBtn').addEventListener('click', function () {
      increaseQuantity();
   });
   document.getElementById('decreaseQuantityBtn').addEventListener('click', function () {
      decreaseQuantity();
   });

   // buy now button 
   $('#buyNowBtn').on('click', function () {
      var form = $('#ticketViewFrom');
      var formData = new FormData(form[0]);
      var formUrl = form.data('url');
      $.ajax({
         url: formUrl,
         method: 'POST',
         data: formData,
         processData: false,
         contentType: false,
         success: function (response) {
            if (response.success) {
               window.location.href = "/checkout";
            } else {
               alert(response.message);
            }
         },
         error: function (xhr, status, error) {
            console.error(error);
         }
      });
   });



});



