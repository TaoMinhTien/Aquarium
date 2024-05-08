@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <h1>About Mangrove-swamp</h1>
    </div>
    <div class="wrap">
        <div class="content move-left">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="https://tse1.mm.bing.net/th?id=OIP.l70pscWUMfclJkmBIiXcfwHaFj&pid=Api&P=0&h=180"
            alt="Standard Post">
        <p>&#128032 : Rừng ngập mặn mangrove, hay mangrove swamp, là một môi trường sinh thái độc đáo và quan trọng tại các khu vực ven biển trên khắp thế giới. Những khu rừng này thường được tìm thấy ở những vùng nước ấm và nhiệt đới, nơi mà điều kiện môi trường phù hợp cho sự phát triển của cây mangrove.

            Cây mangrove, với khả năng chịu muối và sống trong môi trường nước lợ, chủ yếu tạo nên cấu trúc của rừng ngập mặn mangrove. Các loài cây mangrove thường phát triển ở khu vực ven biển, nơi mà nước biển gặp đất liền. Hệ sinh thái này không chỉ cung cấp nơi sống cho nhiều loài động vật và thực vật, mà còn đóng vai trò quan trọng trong việc bảo vệ bờ biển khỏi sự xói mòn và cản trở của sóng biển.
            
            Rừng ngập mặn mangrove cung cấp một môi trường sống phong phú cho nhiều loại động và thực vật biển. Các loài cá, con tôm, cua, ốc, và nhiều loại động vật khác thường tìm kiếm sự ẩn náu và săn mồi trong các rặng mangrove. Nó cũng là nơi sinh sản cho nhiều loài cá, cua, và động vật khác.</p>
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
