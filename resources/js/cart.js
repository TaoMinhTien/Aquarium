import '../../public/asset/js/theme_quang';
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
           // console.log(response);
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

 function decreaseQuantity(ticketId) {
   var quantityInput = document.getElementById('quantity_' + ticketId);
   var currentQuantity = parseInt(quantityInput.value);
   if (currentQuantity > 1) {
     quantityInput.value = currentQuantity - 1;
     updateQuantity(ticketId);
   }
 }

 function increaseQuantity(ticketId) {
   var quantityInput = document.getElementById('quantity_' + ticketId);
   var currentQuantity = parseInt(quantityInput.value);
   quantityInput.value = currentQuantity + 1;
   updateQuantity(ticketId);
 }
 ////
 function updateTotalInCart() {
   $.ajax({
     url: "{{ route('update.total.cart') }}",
     method: 'GET',
   }).done(function(response) {
     // console.log(response);
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
 updateTotalInCart();
 ///
 function showNotification(message) {
     const notification = document.createElement('div');
     notification.classList.add('notificationAddcart');
     notification.textContent = message;
     document.body.appendChild(notification);
     setTimeout(() => {
        notification.remove();
     }, 3000);
  }