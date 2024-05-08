@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <h1>About Shark</h1>
    </div>
    <div class="wrap">
        <div class="content shark">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="https://tse3.mm.bing.net/th?id=OIP._t7_uCarWPJpIAT425qD7QHaFF&pid=Api&P=0&h=180"
            alt="Standard Post">
            <p>&#129416 : Loài cá mập là một nhóm đặc biệt của loài cá thuộc họ Chondrichthyes, bao gồm cả cá mập và lươn. Được biết đến với vẻ mạnh mẽ và tính thích nghi tuyệt vời trong môi trường nước biển, cá mập là một trong những loài cá huyền thoại của đại dương.

                Với hình dáng thân hình thon dài và hàm răng sắc bén, cá mập là những kẻ săn mồi khá tinh ranh trong thế giới dưới biển. Chúng có thể xuất hiện ở mọi đại dương trên thế giới, từ các vùng nước ấm tới các vùng nước lạnh và sâu thẳm.
                
                Cá mập chơi một vai trò quan trọng trong cân bằng sinh thái của đại dương bằng cách kiểm soát số lượng các loài con mồi, ngăn chặn sự quá tăng trưởng của các loài khác. Hơn nữa, chúng còn có giá trị lớn trong nghiên cứu y học, với nhiều loài cá mập được biết đến với khả năng tái tạo sụn và sự kháng lại các bệnh tật.</p>
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

