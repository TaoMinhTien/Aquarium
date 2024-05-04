@extends('welcome')
@section('title', 'Animal')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <h1>About Octopus</h1>
    </div>
    <div class="wrap">
        <div class="content move-left">
        <p>By Jerry Mongo / 0 comment / JAN 18 2017</p>
        <img width="770" height="428" src="https://tse2.mm.bing.net/th?id=OIP.fyY3hGNlA_DaEuDfKYBjYQHaEJ&pid=Api&P=0&h=180"
            alt="Standard Post">
        <p>&#128032 : Bạch tuộc là một trong những loài động vật biển đa dạng và thú vị nhất trong hệ sinh thái đại dương. Với hình dáng đặc trưng là cơ thể mềm mại và tay chân vòng quanh, bạch tuộc có khả năng thích nghi linh hoạt với môi trường sống khác nhau.

            Bạch tuộc được biết đến với sự thông minh và khả năng giấu mình tuyệt vời. Chúng thường sử dụng màu sắc và hoạt động của cơ thể để tương phản hoặc làm mờ dấu vết của mình trước mắt kẻ săn mồi hoặc kẻ thù tiềm ẩn. Bên cạnh đó, bạch tuộc cũng có thể thay đổi hình dạng của cơ thể để phù hợp với môi trường xung quanh, giúp chúng tránh được nguy cơ từ các kẻ săn mồi.
            
            Về sinh học, bạch tuộc thường sống ở độ sâu khá lớn dưới đáy biển, tuy nhiên, chúng cũng có thể được tìm thấy ở các vùng nước cạn nếu điều kiện phù hợp. Chúng là loài ăn tạp, săn mồi bằng cách sử dụng những chiếc vòng tay chứa hơn 200 gai nhỏ để bắt những loài cá, con tôm hoặc các loài động vật biển nhỏ khác.</p>
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

