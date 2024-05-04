@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <h1>About Seaturtle</h1>
    </div>
    <div class="wrap">
        <div class="content move-left">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="https://tse3.mm.bing.net/th?id=OIP.TVi7TFYPlvbdzW03jPLRQgHaFh&pid=Api&P=0&h=180"
            alt="Standard Post">
        <p>&#128032 : Rùa biển là những sinh vật kỳ diệu của đại dương, với vẻ ngoài đặc trưng là vỏ sừng lớn và bề ngoài mạnh mẽ. Chúng thuộc vào một loạt các loài trong họ Cheloniidae và Dermochelyidae, và được chia thành nhiều loài khác nhau, như rùa nước ngọt, rùa xanh, rùa dầu, và rùa da dẻ.

            Rùa biển thường sống trong môi trường nước mặn và có thể được tìm thấy ở khắp các vùng biển trên toàn thế giới. Chúng có khả năng di cư trên khoảng cách lớn, điều này làm cho cuộc sống của chúng trở nên đa dạng và mạo hiểm. Một số loài rùa biển di cư hàng năm từ các vùng ấm đến các khu vực đẻ trứng, trong khi một số khác có thể đi hàng ngàn dặm qua các đại dương.
            
            Rùa biển là những sinh vật cổ xưa, sống trên Trái Đất từ hàng triệu năm trước và vẫn tồn tại đến ngày nay. Tuy nhiên, chúng đang đối mặt với nhiều nguy cơ, bao gồm mất môi trường sống do hoạt động con người, săn bắt quá mức, ô nhiễm biển và thay đổi khí hậu. Việc bảo vệ rùa biển đã trở thành một ưu tiên quan trọng trong nỗ lực bảo tồn đa dạng sinh học và duy trì cân bằng của các hệ sinh thái đại dương.</p>
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