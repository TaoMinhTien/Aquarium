<div>
   <h2>Order Details:</h2>
   @foreach($cartCheckout as $item)
   <div>
      <p>{{ $item['name'] }} x {{ $item['quantity'] }}</p>
      @if (isset($item['start_date']))
      <p>Event date :{{ $item['start_date'] }} - {{ $item['end_date'] }}</p>
      @else
      <p>No Date</p>
      @endif
      <p>Price: {{ number_format($item['price'] / 1000, 3, ',', ',') }}đ</p>
   </div>
   @endforeach
   <div>
      <ul>
         <li>Order number: <strong>{{ $orderNumber }}</strong></li>
         <li>Order date: <strong>{{ $orderTime }}</strong></li>
         <li>Total ticket: <strong>{{ $orderTotal}} ticket</strong></li>
         <li>Total price: <strong>{{ number_format($totalPrice/ 1000, 3, ',', ',') }}đ</strong></li>
         <li>Payment method: <strong>{{ $payment}}</strong></li>
      </ul>
   </div>
   <div>
      <strong>
         Thank You!
      </strong>
   </div>
</div>