
function updateCartCount() {
   var url = "/cart-quantity";
   $.ajax({
       url: url,
       method: 'GET',
   }).done(function(response) {
       $('#cartCount').text(response.cartQuantity);
   }).fail(function(xhr, status, error) {
       console.error(error);
   });
}
$(document).ready(function() {
   updateCartCount();
});



