@extends('welcome')
@section('title', 'Trang Chủ')
@section('content')
    <div>
        <div class = "Homepage-title">
            <h1>Aquarium Installation and Maintenance</h1>
            <p>Fastest and easiest way to cycle your new aquarium</p>
            <a href="{{route('tickets')}}"><button>Buy Ticket Today!</button></a>
        </div>
        <div class = "Homepage-box">
            <div class = "box1">
                <div class=box1-picture>
                    <img src = "{{ asset('asset/Image/fish.png') }}" alt = "fish">
                </div>

                <div class = "box1-text">
                    <h2>Design, installation and maintenance</h2>
                    <p>We have built our reputation on our obsessive attention to detail, passion for aquariums and
                        inoovative design.</p>
                    <button>Read more</button>
                </div>

            </div>
            <div class = "box2">
                <div class = "box2-text">
                    <h2>Contact us to arrange a consultation</h2>
                    <p>If you are interested in a bespole aquarium, no matter the size we are here to turn your dream into
                        reality.</p>
                    <button>Contact Details</button>
                </div>
            </div>
            <a href = "https://www.youtube.com/">
                <div class = "box3">
                </div>
            </a>
        </div>


        <!-- Swiper -->
        <div class = "Hieu">
        <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-swiper-autoplay="4000">
                        <img class = "slider-picture"
                            src = "{{ asset('asset/Image/aqua1.jpg') }}"></div>
                    <div class="swiper-slide" data-swiper-autoplay="4000"><img class = "slider-picture"
                            src = "{{ asset('asset/Image/aqua2.jpg') }}"></div>
                    <div class="swiper-slide" data-swiper-autoplay="4000"><img class = "slider-picture"
                            src = "{{ asset('asset/Image/aqua3.jpg') }}"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <!-- Fourblock Information -->
        <div class = "Homepage-information">
            <div class = "Homepage-information-picture">
                <img src = "{{ asset('asset/Image/image-info.jpg') }}">
            </div>
            <div class = "Homepage-information-text">
                <div class = "Homepage-Info">
                    <h1>Aquarium Design,<br> Manufacture,<br> Installation</h1>
                    <p>The AquaPro have created some of the most stylish and luxury bespoke built aquariums and fish tanks
                        in the country. We draw on over 25 years of expertise in designing, manufacturing and installing
                        aquariums.</p>
                    <button>MORE INFO</button>
                </div>
            </div>
            <div class = "Homepage-information-picture2">
                <img src = "{{ asset('asset/Image/image-info.jpg')}}">
            </div>
            <div class = "Homepage-information-text2">
                <div class = "Homepage-Info">
                    <h1>Aquarium Design,<br> Manufacture,<br> Installation</h1>
                    <p>The AquaPro have created some of the most stylish and luxury bespoke built aquariums and fish tanks
                        in the country. We draw on over 25 years of expertise in designing, manufacturing and installing
                        aquariums.</p>
                    <button>MORE INFO</button>
                </div>
            </div>
        </div>

        <!-- Overview banner -->
        <div class = "Homepage_overview_banner">
            <div class = "Homepage_overview_banner_text">
                <h1> Specialists In Custom Fish <br>Tanks, Luxury Aquarium Design, Installation And Maintenance.</h1>
                <p>AquaPro prides itself on their depth of knowledge, quality of service and a tailored approach to luxury
                    aquarium design. We work closely with interior designers, architects and engineers to provide the
                    highest standard in design. Providing an extensive variety of services, AquaPro has cemented its
                    position as the industry leader in custom fish tank design.</p>
                <button>View our Portfolio</button>
            </div>
        </div>


        <!-- News/Posts -->
        <div class = "Homepage-news">
            <h1>Lastest Posts</h1>
            <div class = "Homepage-Events">
                <div class = "Homepage-top-events">
                    <img src = "{{ asset('asset/Image/fish2.jpg')}}" class = "Homepage-EventPicture">
                    <h3>Looking for aquarium specialists?</h3>
                    <p>Celebrate the best of Easter in AquariumName with new activities at the AquariumName and get ready
                        for an extraordinary adventure that will enchant the whole family!</p>
                    <button>Read More</button>
                </div>
                <div class = "Homepage-top-events">
                    <img src = "{{ asset('asset/Image/fish1.jpg')}}" class = "Homepage-EventPicture">
                    <h3>Looking for aquarium specialists?</h3>
                    <p>Celebrate the best of Easter in AquariumName with new activities at the AquariumName and get ready
                        for an extraordinary adventure that will enchant the whole family!</p>
                    <button>Read More</button>
                </div>
                <div class = "Homepage-top-events">
                    <img src = "{{ asset('asset/Image/fish2.jpg')}}" class = "Homepage-EventPicture">
                    <h3>Looking for aquarium specialists?</h3>
                    <p>Celebrate the best of Easter in AquariumName with new activities at the AquariumName and get ready
                        for an extraordinary adventure that will enchant the whole family!</p>
                    <button>Read More</button>
                </div>
            </div>
        </div>

        <!-- Gallary -->
        <div class = "Homepage_gallary">
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
        <div class = "Homepage_AboutUs">
            <h1>Clients About Us</h1>
            <div class = "Homepage_AboutUs_1">
                <div class = "Homepage_AboutUs_rectangle">
                    <img src = "{{ asset('asset/Image/AboutUs_rectangle1.jpg')}}">
                </div>
                <div class = "Homepage_AboutUs_rectangle">
                    <p>
                        “I have found AquaPro to be completely reliable. I will forever be grateful to them for cleaning
                        things up after Katrina with out urging from me.”
                        <br><br>
                        <b>-Godfrey Griffin</b>
                    </p>

                </div>
            </div>


            <div class = "Homepage_AboutUs_2">
                <div class = "Homepage_AboutUs_square">
                    <p>
                        “I would not hesitate to recommend you and your team."
                        <br><br>
                        <b>-Matthew Shaw</b>
                    </p>
                </div>
                <div class = "Homepage_AboutUs_square">
                    <img src = "{{ asset('asset/Image/AboutUs-square1.jpg')}}">
                </div>
                <div class = "Homepage_AboutUs_square">
                    <img src = "{{ asset('asset/Image/fish1.jpg')}}">
                </div>
                <div class = "Homepage_AboutUs_square">
                    <img src = "{{ asset('asset/Image/AboutUs-square1.jpg')}}">
                </div>

                <div class = "Homepage_AboutUs_square">
                </div>

                <div class = "Homepage_AboutUs_square">
                    <p>
                        “They made it look so easy, were professional and very knowledgeable."
                        <br><br>
                        <b>-Richard Eaton</b>
                    </p>
                </div>

                <div class = "Homepage_AboutUs_square">
                    <img src = "{{ asset('asset/Image/aqua2.jpg')}}">
                </div>

                <div class = "Homepage_AboutUs_square">
                </div>

                <div class = "Homepage_AboutUs_square">
                </div>
            </div>
        </div>
    </div>
    
@endsection
