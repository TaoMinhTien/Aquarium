import $ from 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
import $ from 'https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css';
import $ from 'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js';
import $ from 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';

function updateCartCount() {
   $.ajax({
           url: "{{ route('cart.quantity') }}",
           method: 'GET',
       }).done(function(response) {
           $('#cartCount').text(response.cartQuantity);
       })
       .fail(function(xhr, status, error) {});
}
updateCartCount();