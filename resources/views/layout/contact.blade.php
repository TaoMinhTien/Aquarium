@extends('welcome')
@section('title', 'Contact')
@section('content')
    <div class="container-tien">
        <div class="banner_contact-tien">
            <div class="title-banner-tien">
                <h1 class="">Contact</h1>
                <a href="./">Home / </a><a href="{{ route('contact.view') }}">Contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12"></div>
            <div class="col-sm-4 col-12">
                <div class="content-contact-tien text-center">
                    <h2>Contact</h2>
                </div>
                <div class="form-contact-tien">
                    <form action="{{ route('submit.form') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="mb-2" for="name">Your Name</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2" for="name">Phone Number</label>
                                    <input class="form-control" type="text" name="phone" id="phone"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label class="mb-2" for="name">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="contact-gender-tien">
                                    <input type="radio" name="gender" id="gender" value="Male">
                                    <label class="male" for="gender">Male</label>
                                    <input type="radio" name="gender" id="gender" value="Female">
                                    <label for="gender">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-description-tien">
                            <label class="mb-2" for="description">Commnet</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-success-message-tien text-success"></div>
                        <div class="text-center button-tien">
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-sm-4 col-12"></div>
        </div>
        <div class="address-map-tien">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9075928210577!2d105.86542967625688!3d20.996340980644916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac04d73a728b%3A0x860684496d96f110!2sVinKE%20%26%20Vinpearl%20Aquarium%20Times%20City!5e0!3m2!1sen!2s!4v1715227606800!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="box-address-map-tien">
                <div class="d-flex flex-wrap mb-3">
                    <p class="address-tien">458 P. Minh Khai, Thanh Lương, Hai Bà Trưng, Hà Nội 100000, Vietnam</p>
                    <svg class="icon-point-tien" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#005eff"
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                </div>
                <div class="d-flex flex-wrap">
                    <p class="phone-tien">+8419006677</p>
                    <svg class="icon-phone-tien" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#005eff"
                            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

@endsection
