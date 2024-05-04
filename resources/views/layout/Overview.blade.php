@extends('welcome')
@section('title', 'Animal')
@section('content')
    <div class="banner">
        <img src="{{ asset('asset/Image/overviewbanner.jpg') }}"
            alt="Banner">
        <h1>OverView</h1>
    </div>
    <div class="wrap">
        <div class="content overview">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="{{ asset('asset/Image/overview.jpg') }}"
            alt="Standard Post">
        <p>&#127754 : Thủy cung, hay còn được gọi là hồ cá, là một biểu tượng của sự kỳ diệu và sự đa dạng của đời sống dưới nước. Được thiết kế như một môi trường sống nhân tạo cho các loài cá và sinh vật biển khác, thủy cung không chỉ là một điểm đến giải trí mà còn là một nền tảng quan trọng để nghiên cứu, giáo dục và bảo tồn động vật biển.

            Với sự kết hợp của nước biển, đá san hô, cây cỏ biển, và các thiết bị kỹ thuật số, thủy cung tạo ra một môi trường sống tự nhiên cho hàng nghìn loài cá, tôm, sò, và các sinh vật biển khác. Các hồ cá thường được thiết kế với các hệ thống lọc nước và cung cấp oxy để duy trì môi trường sống lý tưởng cho các loài vật.
            
            Ngoài việc là điểm đến giải trí cho du khách, thủy cung còn đóng vai trò quan trọng trong việc giáo dục và nghiên cứu về đời sống dưới nước. Các trung tâm thủy cung thường cung cấp các chương trình giáo dục và trải nghiệm trực quan để tăng cường nhận thức về bảo tồn môi trường và đa dạng sinh học của đại dương.
            
            Hơn nữa, thủy cung đóng vai trò quan trọng trong việc bảo tồn các loài động vật biển bị đe dọa và cung cấp một nền tảng cho các nghiên cứu về sinh học và hành vi của chúng. Những nỗ lực bảo tồn và nghiên cứu tại các thủy cung có thể giúp đẩy mạnh sự hiểu biết và quan tâm đến việc bảo vệ môi trường biển trong cộng đồng toàn cầu.</p>
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
