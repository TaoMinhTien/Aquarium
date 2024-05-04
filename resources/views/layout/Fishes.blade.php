@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <img src="{{ asset('asset/Image/fishes.jpg') }}" alt="banner">
        <h1>About Fishes</h1>
    </div>
    <div class="wrap">
        <div class="content fishes">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="{{ asset('asset/Image/fishes1.jpg') }}"
            alt="Standard Post">
        <p>&#128032 : Loài cá là một phần quan trọng của đại dương và hệ sinh thái nước ngọt trên khắp thế giới. Được biết đến với sự đa dạng về hình dạng, kích  thước và màu sắc, cá có thể được tìm thấy ở mọi môi trường từ các dòng sông nho nhỏ đến các vùng biển sâu lớn.

            Cá là loại động vật có xương sống, thở bằng mang và di chuyển bằng cách đập đuôi. Chúng là một phần quan trọng của chuỗi thức ăn dưới nước, đóng vai trò cực kỳ quan trọng trong việc duy trì cân bằng sinh thái của môi trường sống của chúng.
            
            Ngoài việc cung cấp nguồn thực phẩm cho nhiều loài động vật khác, cá cũng đóng vai trò quan trọng trong việc kiểm soát sự phát triển của tảo và thực vật dưới nước. Hơn nữa, một số loài cá cũng được sử dụng làm dược liệu và nguồn thực phẩm quan trọng cho con người.</p>
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

