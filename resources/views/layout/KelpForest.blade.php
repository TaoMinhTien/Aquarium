@extends('welcome')
@section('title', 'Animal')
@section('content')
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Động Vật - Thủy Cung</title>

</head>

<body>

    <!-- Banner -->
    <div class="banner">
        <h1>About kelp-forest</h1>
    </div>
    <div class="wrap">
        <div class="content move-left">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="https://tse3.mm.bing.net/th?id=OIP.2o0c6WBonY2f1XOW6g-4FgHaE7&pid=Api&P=0&h=180"
            alt="Standard Post">
        <p>&#128032 : Rừng tảo Kelp, hay còn được gọi là kelp forest, là một trong những môi trường sinh học quan trọng và độc đáo nhất trên hành tinh. Các rừng tảo Kelp thường được tìm thấy ở các vùng nước lạnh và có dòng chảy mạnh, như ở các bờ biển phía Tây Bắc Thái Bình Dương, Nam Cực, và các vùng nước sâu của Nam Bán Cầu.

            Các tảo Kelp là loại tảo lớn, có thể phát triển đến hàng chục mét trong một năm, tạo ra một mạng lưới cấu trúc phức tạp dưới dạng rừng dưới nước. Những thân tảo Kelp cao và mạnh mẽ tạo ra một môi trường sống ấn tượng cho hàng loạt các loài sinh vật biển, từ những loài cá nhỏ cho đến cá mập và động vật lớn như cá voi.
            
            Rừng tảo Kelp cung cấp nơi trú ẩn, ẩm thực và sinh sản cho hàng trăm loài, cũng như cung cấp nguồn dinh dưỡng cho các hệ sinh thái đại dương xung quanh. Nó cũng có vai trò quan trọng trong việc kiểm soát khí hậu và làm giàu đa dạng sinh học của biển.</p>
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
</body>
</html>
