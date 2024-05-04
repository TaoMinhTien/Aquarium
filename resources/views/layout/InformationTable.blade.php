@extends('welcome')
@section('title', 'Animal')
@section('content')
<div class="Thanhdz">
    <section class="Animals" id="overview">
        <h2>Overview</h2>
        <img width="550" height="350" src="{{ asset('asset/Image/overview.jpg') }}" alt="Overview">
        <p>&#9728 Tổng quan về thủy cung của chúng tôi &#9728</p>
        <a href="{{ route('overview')}}">Xem chi tiết </a>
    </section>

    <section class="Animals" id="fishes">
        <h2>Fishes</h2>
        <img width="400" height="400" src = "{{ asset('asset/Image/fishes.jpg') }}" alt="Open Ocean">
        <p>&#9728 Những điều cơ bản về loài cá mà bạn có thể chưa biết !!! &#9728</p>
        <a href="{{ route('fishes')}}">Xem chi tiết </a>
    </section>
    
    <section class="Animals" id="shark">
        <h2>Shark</h2>
        <img width="400" height="400" src="https://tse4.mm.bing.net/th?id=OIP.mCsZr5IBkGLQhnul_9tx2QHaEK&pid=Api&P=0&h=180" alt="Kelp Forest">
        <p>&#9728 Những điều về cá mập mà bạn có thể chưa biết !!! &#9728</p>
        <a href="{{ route('shark')}}">Xem chi tiết </a>
    </section>
    
    <section class="Animals" id="dolphin">
        <h2>Dolphin</h2>
        <img width="600" height="500" src="https://www.pbs.org/wnet/nature/files/2020/07/Dolphin.png" alt="Open Ocean">
        <p>&#9728 Những điều về cá heo mà bạn chưa biết !!! &#9728</p>
        <a href="{{ route('dolphin')}}">Xem chi tiết </a>
    </section>
    
    <section class="Animals" id="octopus">
        <h2>Octopus</h2>
        <img width="400" height="200" src="https://media.vov.vn/sites/default/files/styles/large/public/2022-08/a4_1.jpg" alt="Mangrove Swamp">
        <p>&#9728 Những điều về loài mực mà bạn chưa biết !!! &#9728</p>
        <a href="{{ route('octopus')}}">Xem chi tiết </a>
    </section>

    <section class="Animals" id="seaturtle">
        <h2>Sea Turtle</h2>
        <img width="400" height="200" src="https://tse3.mm.bing.net/th?id=OIP.M_tWsjB2VNJoP35ZvgRm7wHaEo&pid=Api&P=0&h=180" alt="Mangrove Swamp">
        <p>&#9728 Những điều về loài rùa biển mà bạn chưa biết !!! &#9728</p>
        <a href="{{ route('seaturtle')}}">Xem chi tiết </a>
    </section>

    <section class="Animals" id="kelp-forest">
        <h2>Kelp Forest</h2>
        <img width="400" height="400" src="https://i.pinimg.com/564x/cd/45/ab/cd45ab22bf290e44fe98c78b76f085ef.jpg" alt="Kelp Forest">
        <p>&#127793 Rừng tảo là một hệ sinh thái dưới nước cao vút, đầy đủ một loạt các loài sinh vật biển.. &#127793</p>
        <a href="{{ route('kelpforest')}}">Xem chi tiết </a>
    </section>

    <section class="Animals" id="open-ocean">
        <h2>Open Ocean</h2>
        <img width="400" height="400" src="https://tse2.mm.bing.net/th?id=OIP.uYjIiOPqRmcTJjsYjZqahgHaFE&pid=Api&P=0&h=180" alt="Open Ocean">
        <p>&#127793 Rừng tảo là một hệ sinh thái dưới nước cao vút, đầy đủ một loạt các loài sinh vật biển.. &#127793</p>
        <a href="{{ route('openocean')}}">Xem chi tiết </a>
    </section>

    <section class="Animals" id="coral-reef">
        <h2>Coral Reef</h2>
        <img width="350" height="250" src="https://i.pinimg.com/originals/b7/e0/ca/b7e0ca7254712f6bf24b9683aaa1cada.jpg" alt="Coral Reef">
        <p>&#127793 Rạn san hô là môi trường sống phong phú và đa dạng, là nhà của rất nhiều loài cá, động vật không xương sống và thực vật... &#127793 </p>
        <a href="{{ route('coralreef')}}">Xem chi tiết </a>
    </section>

    <section class="Animals" id="mangrove-swamp">
        <h2>Mangrove Swamp</h2>
        <img width="400" height="200" src="https://i.ytimg.com/vi/jDq11_t9SY0/maxresdefault.jpg" alt="Mangrove Swamp">
        <p>&#127793 Vùng đầm lầy ngập triều là một môi trường sống đặc biệt và quan trọng, nơi mà đất liền và biển gặp nhau, tạo nên một tổ ấm cho nhiều loài sinh vật... &#127793</p>
        <a href="{{ route('mangroveswamp')}}">Xem chi tiết </a>
    </section>

    
</div>
@endsection

