@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <img src="{{ asset('asset/Image/coralreef.jpg') }}"
        alt="banner">
        <h1>About Coral-Reef</h1>
    </div>
    <div class="wrap">
        <div class="content coralreef">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="{{ asset('asset/Image/coralreef.jpg') }}"
            alt="Standard Post">
        <p>&#128032 : Rặng san hô, hay còn được gọi là coral reef, là một trong những môi trường đặc biệt và đa dạng nhất trên hành tinh, tạo nên một hệ sinh thái vô cùng phong phú dưới dạng rừng dưới nước. Những cấu trúc san hô phát triển từ chính việc kết tụ của các loài san hô và sinh vật biển khác, tạo ra một mê cung đa màu sắc và đa dạng.

            Rặng san hô thường được tìm thấy ở các vùng nước ấm và nhiệt đới, nơi ánh sáng mặt trời và nước biển ấm cùng tạo điều kiện lý tưởng cho sự phát triển của chúng. Điều này thường xảy ra ở các khu vực như biển Caribe, biển Ấn Độ Dương và Thái Bình Dương.
            
            Đặc điểm đặc biệt của rặng san hô là sự đa dạng sinh học không thể tin được. Chúng là nơi sống của hàng ngàn loài sinh vật biển, từ cá nhỏ cho đến cá mập, từ loài san hô mềm mại đến các loài giáp xác và sao biển. Rặng san hô không chỉ cung cấp nơi trú ẩn, ẩm thực và sinh sản cho các loài sinh vật biển, mà còn đóng vai trò quan trọng trong bảo vệ bờ biển khỏi sóng biển, xói mòn đất và bão táp.</p>
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

