@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <img src="{{ asset('asset/Image/dolphin.jpg') }}" alt="banner">
        <h1>About Dolphin</h1>
    </div>
    <div class="wrap">
        <div class="content dolphin">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="{{ asset('asset/Image/dolphin1.jpg') }}"
            alt="Standard Post">
        <p>&#128032 : Cá heo, với vẻ ngoài đầy sức sống và sự thông minh hiếm có, là một trong những loài động vật biển được yêu thích nhất trên hành tinh. Chúng thuộc họ Cetacea và có sự đa dạng về loài, từ cá heo cái nhỏ bé tới cá heo xanh khổng lồ. Sự linh hoạt và sự thông minh của chúng khiến cho cá heo trở thành đối tượng nghiên cứu quan trọng trong ngành khoa học hành vi động vật.

            Cá heo sống chủ yếu trong môi trường nước mặn, thường được tìm thấy ở các vùng biển và đại dương trên khắp thế giới. Chúng có thể di chuyển theo nhóm hoặc đơn độc và thường thể hiện sự thông minh thông qua cách tương tác với môi trường và cách hợp tác với nhau trong việc săn mồi.
            
            Đặc biệt, cá heo có khả năng giao tiếp phức tạp, sử dụng âm thanh, cử động và thậm chí là ngôn ngữ cơ thể để truyền đạt thông điệp và tương tác với đồng loại. Sự hiểu biết về khả năng giao tiếp của cá heo đã mở ra cánh cửa cho nhiều nghiên cứu về cách chúng tương tác với con người và về cách chúng cảm nhận thế giới xung quanh.</p>
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

