@extends('welcome')
@section('title', 'Trang Chủ')
@section('content')


@if(isset($Banners))
@foreach($Banners as $value)
<div>
    <div class="Homepage-title">
        <h1>{{$value->title}}</h1>
        <p>{{$value->description}}</p>
        <a href="{{route('tickets')}}"><button>Buy Ticket Today!</button></a>
    </div>
@endforeach
@endif

    <div class="Homepage-box">
        <div class="box1">
            <div class=box1-picture>
                <img src="{{ asset('asset/Image/fish.png') }}" alt="fish">
            </div>

            <div class="box1-text">
                <h2>Design, installation and maintenance</h2>
                <p>We have built our reputation on our obsessive attention to detail, passion for aquariums and
                    inoovative design.</p>
                <button>Read more</button>
            </div>

        </div>
        <div class="box2">
            <div class="box2-text">
                <h2>Contact us to arrange a consultation</h2>
                <p>If you are interested in a bespole aquarium, no matter the size we are here to turn your dream into
                    reality.</p>
                <button>Contact Details</button>
            </div>
        </div>
        <a href="https://www.youtube.com/">
            <div class="box3">
            </div>
        </a>
    </div>

@if( $getImageBanner[0]&& $getImageBanner[1]&& $getImageBanner[2]  )
    <!-- Swiper -->
    <div class="Hieu">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-swiper-autoplay="4000">
                    <img class="slider-picture" src="{{asset('banner_image/' .$getImageBanner[0]->image_url )}}">
                </div>
                <div class="swiper-slide" data-swiper-autoplay="4000"><img class="slider-picture" src="{{asset('banner_image/' .$getImageBanner[1]->image_url )}}"></div>
                <div class="swiper-slide" data-swiper-autoplay="4000"><img class="slider-picture" src="{{asset('banner_image/' .$getImageBanner[2]->image_url )}}"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endif



    <!-- Fourblock Information -->
    <div class="Homepage-information">
        <div class="Homepage-information-picture">
            <img src="{{asset('information_image/' .$getImageInformation[1][0]->image_url )}}">
        </div>
@if( $Information[0]&& $Information[1]&&$getImageInformation[0]&&$getImageInformation[1])
        <div class="Homepage-information-text">
            <div class="Homepage-Info">
                <h1>{{$Information[0]->title}}</h1>
                <p>{{$Information[0]->description}}</p>
                <button>MORE INFO</button>
            </div>
        </div>
        <div class="Homepage-information-picture2">
            <img src="{{asset('information_image/' .$getImageInformation[0][0]->image_url )}}">
        </div>
        <div class="Homepage-information-text2">
            <div class="Homepage-Info">
                <h1>{{$Information[1]->title}}</h1>
                <p>{{$Information[1]->description}}</p>
                <button>MORE INFO</button>
            </div>
        </div>
    </div>
@endif

    <!-- Overview banner -->
    @if(isset($getImageOverview))

<style>
    .Homepage_overview_banner{
    background-image: url(' {{asset('overview_image/' . $getImageOverview[0]->image_url )}} ');
    background-repeat: no-repeat;
    background-size: 117%;
    width: 100%;
    height: 750px;
    margin-top: 150px;
}
</style>
@endif
@if(isset($Overview))
    <div class="Homepage_overview_banner">
        <div class="Homepage_overview_banner_text">
            <h1>{{$Overview->title}}</h1>
            <p>{{$Overview->description}}</p>
            <button>View our Portfolio</button>
        </div>
    </div>
@endif


    <!-- News/Posts -->
    <div class="Homepage-news">
        <h1>Animals Posts</h1>
        <div class="Homepage-Events">
            @if(isset($animalsHomepage))
            @foreach($animalsHomepage as $value)

            <div class="Homepage-top-events">
                <img src="{{ asset('news_img/' . $value->image) }}" class="Homepage-EventPicture">
                <h3>{{$value -> title}}</h3>
                <p class = "Homepage-Description">{{$value -> description}}</p>
                <form method="post" action="{{route('animals.infor.view')}}" class="group block">
                    @csrf
                    <input type="hidden" name="animal_infor_id" value="{{$value->id}}">
                    <button>Read More</button>
                </form>

            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!-- Gallary -->
    <div class="Homepage_gallary">
        <h1>Gallery</h1>
        <div class="wrapper">
            <div class="media">
                <div class="layer">
                    <p>+ Paul Gilmore</p>
                </div>
                <img src="{{ asset('asset/Image/aqua1.jpg')}}" alt="" />
            </div>

            <div class="media">
                <div class="layer">
                    <p>+ M. O' Neil</p>
                </div>
                <img src="{{ asset('asset/Image/fish1.jpg')}}" alt="" />
            </div>

            <div class="media">
                <div class="layer">
                    <p>+ N. Mehta</p>
                </div>
                <img src="{{ asset('asset/Image/aqua2.jpg')}}" alt="" />
            </div>

            <div class="media">
                <div class="layer">
                    <p>+ N. Mehta</p>
                </div>
                <img src="{{ asset('asset/Image/aqua3.jpg')}}" alt="" />
            </div>

            <div class="media">
                <div class="layer">
                    <p>+ N. Mehta</p>
                </div>
                <img src="{{ asset('asset/Image/image-info.jpg')}}" alt="" />
            </div>

            <div class="media">
                <div class="layer">
                    <p>+ N. Mehta</p>
                </div>
                <img src="{{ asset('asset/Image/fish2.jpg')}}" alt="" />
            </div>

        </div>
    </div>


    <!--AboutUs-->
    <div class="Homepage_AboutUs">
        <h1>Clients About Us</h1>
        <div class="Homepage_AboutUs_1">
            <div class="Homepage_AboutUs_rectangle">
                <img src="{{ asset('asset/Image/AboutUs_rectangle1.jpg')}}">
            </div>
            <div class="Homepage_AboutUs_rectangle">
                <p>
                    “I have found AquaPro to be completely reliable. I will forever be grateful to them for cleaning
                    things up after Katrina with out urging from me.”
                    <br><br>
                    <b>-Godfrey Griffin</b>
                </p>

            </div>
        </div>


        <div class="Homepage_AboutUs_2">
            <div class="Homepage_AboutUs_square">
                <p>
                    “I would not hesitate to recommend you and your team."
                    <br><br>
                    <b>-Matthew Shaw</b>
                </p>
            </div>
            <div class="Homepage_AboutUs_square">
                <img src="{{ asset('asset/Image/AboutUs-square1.jpg')}}">
            </div>
            <div class="Homepage_AboutUs_square">
                <img src="{{ asset('asset/Image/fish1.jpg')}}">
            </div>
            <div class="Homepage_AboutUs_square">
                <img src="{{ asset('asset/Image/AboutUs-square1.jpg')}}">
            </div>

            <div class="Homepage_AboutUs_square">
            </div>

            <div class="Homepage_AboutUs_square">
                <p>
                    “They made it look so easy, were professional and very knowledgeable."
                    <br><br>
                    <b>-Richard Eaton</b>
                </p>
            </div>

            <div class="Homepage_AboutUs_square">
                <img src="{{ asset('asset/Image/aqua2.jpg')}}">
            </div>

            <div class="Homepage_AboutUs_square">
            </div>

            <div class="Homepage_AboutUs_square">
            </div>
        </div>
    </div>
</div>

@endsection