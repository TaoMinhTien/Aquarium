@extends('welcome')
@section('title', 'News')
@section('content')
<link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">
<div class="container-quang">
   <div class="head-news">
      <span class="stand-news">Event</span>
   </div>
   <div class="row news_news">
      <!-- left -->
      <div class="col-8  left-news shadow-sm p-3 mb-5 bg-body-tertiary rounded">
         <div class="_news_left">
            <div>
               <img class=" _news_left_image" alt="" src="https://a.cdn-hotels.com/gdcs/production92/d257/02157ac0-adda-4a14-9bb6-58eb7ecc28a1.jpg?impolicy=fcrop&w=800&h=533&q=medium" />
               <div class="_news_l">
                  <div class="_news_l_date">20.04.2024</div>
                  <span>
                     <h3 class="_news_l_h">How to position your furniture for positivity</h3>
                  </span>
                  <p class="_news_l_text">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia <br> itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis <br> voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi <br> temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     <br>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     <br>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo <br> tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                     dignissimos. Molestias explicabo corporis voluptatem?
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                     pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                     mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                  </p>
               </div>
               <div class="d-flex _news_l_b">
                  <div>
                     <form action="{{Route('tickets.buy')}}" method="post">
                        @csrf
                        <button type="submit" class=" _btn">
                           Buy Tickets
                        </button>
                     </form>
                  </div>
                  <div class="ms-2">
                     <form action="{{Route('tickets.buy')}}" method="post">
                        @csrf
                        <button type="submit" class=" _btn">
                           Contact
                        </button>
                     </form>
                  </div>
               </div>
               <div class="__line_end"></div>
            </div>
         </div>
      </div>
      <!-- right -->
      <div class="col-4 right-news shadow-sm p-3 mb-5 bg-body-tertiary rounded">
         <div class="_news_r">
            <span class="_event">Related events</span>
         </div>
         <div class="__line"></div>
         <div>
            <ul>
               <li class="_new_r">
                  <div class="d-flex">
                     <a href="">
                        <img src="https://a.cdn-hotels.com/gdcs/production92/d257/02157ac0-adda-4a14-9bb6-58eb7ecc28a1.jpg?impolicy=fcrop&w=800&h=533&q=medium" alt="" class="">
                     </a>
                     <div class="_name">
                        <a href="">
                           <h3 class="event_name"><strong>News name</strong></h3>
                        </a>
                        <dl class="_news_r_ticket">
                           <div class="d-flex">
                              <dt class="inline">Date:</dt>
                              <dd class="inline ms-1">20.04.2024</dd>
                           </div>
                           <div class="d-flex">
                              <dt class="inline">Ticket:</dt>
                              <dd class="inline mx-1">299.000đ</dd>
                           </div>
                        </dl>
                     </div>
                  </div>
                  <div class="_new_r_form">
                     <div>
                        <form action="{{Route('tickets.buy')}}" method="post">
                           @csrf
                           <button type="submit" class="_btn_buy">
                              Buy now
                           </button>
                        </form>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="_news_r">
            <span class="_event">Contacts</span>
         </div>
         <div class="__line"></div>
         <div class="px-2 mt-3">
            <form>
               <div class="form-group-detail">
                  <label for="exampleInputEmail1">Email address</label>
                  <br>
                  <input type="email" class="form-control-detail" id="exampleInputEmail1"  placeholder="Enter email">
               </div>
               <div class="form-group-detail">
                  <label for="name">Fullname</label>
                  <br>
                  <input type="name" class="form-control-detail" id="name" placeholder="Enter your name">
               </div>
               <div class="form-group-detail">
                  <label for="phone">Phone number</label>
                  <br>
                  <input type="phone" class="form-control-detail" id="phone" placeholder="enter your Phone number">
               </div>
               <button type="submit" class="_btn mt-4 ">Submit</button>
            </form>
         </div>
      </div>
   </div>
   <p class="news_bt">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos. Molestias explicabo corporis voluptatem?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos. Molestias explicabo corporis voluptatem?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos. Molestias explicabo corporis voluptatem?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos. Molestias explicabo corporis voluptatem?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos. Molestias explicabo corporis voluptatem?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos. Molestias explicabo corporis voluptatem?

   </p>
</div>
@endsection