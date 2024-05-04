@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <h1>About Open-ocean</h1>
    </div>
    <div class="wrap">
        <div class="content move-left">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="https://tse3.mm.bing.net/th?id=OIP.XBvdPtBf5O-mFRKjzDCJhgHaE7&pid=Api&P=0&h=180"
            alt="Standard Post">
        <p>&#128032 : Đại dương mở, hay còn được gọi là open ocean, là một trong những môi trường đại dương lớn nhất và có sự đa dạng sinh học vô cùng phong phú. Nó chiếm phần lớn diện tích của bề mặt Trái Đất và bao gồm tất cả các vùng nước không được che phủ bởi lục địa hoặc các địa hình biển đảo.

            Trong open ocean, cuộc sống tồn tại ở mọi tầng lớp của đại dương, từ mặt nước đến đáy biển sâu vô cùng. Tại các tầng nước trên cùng, chúng ta có thể tìm thấy loài cá nhỏ, động vật biển, và thậm chí cả chim biển. Các loài thủy tức, cá mập, và cá voi thường sống ở các tầng nước sâu hơn.
            
            Đặc điểm đặc biệt của open ocean là sự di cư lớn của các loài sinh vật biển. Các loài cá, cá voi, và thủy tức thường di chuyển hàng ngàn dặm qua đại dương mở để tìm kiếm thức ăn hoặc vùng đẻ trứng. Điều này tạo ra một môi trường đa dạng, động đất và luôn biến đổi trong đại dương mở.</p>
        </div>
        <div class="content move-right">
        <h1>Calender</h1>
        <div class="calendar-container move-right">
            <div class="calendar">
                <div class="calendar-header">
                    <span id="month" class="month"></span>
                    <span id="year" class="year"></span>
                </div>
                <div class="calendar-body" id="calendar-body">
                </div>
            </div>
        </div>
        <h1>Blogs</h1>
        <a href="{{ route('guide1')}}">* Hướng dẫn cơ bản về cách thiết lập và chăm sóc bể cá  </a>
        <a href="{{ route('guide2')}}">* Thông tin về nguồn gốc, kích thước, môi trường sống tự nhiên, yêu cầu về nước, và hành vi sinh học của từng loài cá. </a>

        <script src="scripts.js"></script>
        @endsection
