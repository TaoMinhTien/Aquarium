@extends('welcome')
@section('title', 'Login')
@section('content')
<style>
   @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);
   @import url(https://fonts.googleapis.com/css?family=Arimo:300,400,400italic,700,700italic);

   * {
      margin: 0px;
      padding: 0px;
      list-style: none;
   }

   .body-quang {
      font-family: "Open Sans";
      background-image: url("https://cdn-imgix.headout.com/microbrands-content-image/image/8fedc7b7c9c8a6724c20095403281854-sea%20life%20london.jpg");
      height: 100%;
      width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
   }

   img {
      max-width: 100%;
   }

   .a-quang {
      text-decoration: none;
      outline: none;
      color: #444;
   }

   .a-quang:hover {
      color: #444;
   }

   .a-quang:hover,
   .a-quang:focus,
   input,
   textarea {
      text-decoration: none;
      outline: none;
   }

   ._lk_de {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
      background-repeat: no-repeat;
      background-size: cover;
      padding: 10vh 0;
      position: relative;

   }

   .form-main {
      width: 500px;
      display: block;
      margin: 20px auto;
      padding: 25px 50px 25px;
      background: rgba(255, 255, 255, 0.6);
      border-radius: 6px;
      z-index: 9;
   }

   .logo {
      display: block;
      margin: 20px auto;
      width: 100px;
      height: 100px;
   }

   .form-group {
      padding: 10px 0px;
      display: inline-block;
      width: 100%;
      position: relative;
   }

   .form-group p {
      margin: 0px;
   }

   .form-control {
      min-height: 45px;
      -webkit-box-shadow: none;
      box-shadow: none;
      padding: 10px 15px;
      border-radius: 20px;
      border: 1px solid#2b3990;
   }

   .checkbox {
      display: flex;
      justify-content: space-around;
   }

   ._btn_04 {
      display: inline-block;
      width: 100%;
      padding: 12px 0px;
      background: #2b3980;
      border-radius: 20px;
      border: 1px #fff;
      text-align: center;
      font-size: 16px;
   }

   ._btn_04 .a-quang {
      font-size: 15px;
      color: #fff;
   }

   .form-end {
      padding-top: 6px;
      display: flex;
      justify-content: center;
   }

   .form-end a {
      text-decoration: none;
   }
   .error-existingUser{
      color: red;
      font-size: 12px;
   }

   @media screen and (max-width: 600px) {
      .form-main {
         width: 90%;
      }
   }
</style>
<div>
   <div class="body-quang">
      <div class="form-02-main">
         <div class="row">
            <div class="_lk_de">
               <!-- form login -->
               <form action="{{Route('login.edit')}}" method="post">
                  @csrf
                  <div class="form-main">
                     <div class="logo">
                        <img src="" alt="logo">
                     </div>
                     <div class="form-group">
                        <input value="{{ old('email', session('existingUser.email')) }}" type="email" name="email" class="form-control " type="text" placeholder="Enter Email" required="" aria-required="true">
                     </div>
                     <div class="form-group">
                        <input type="password" name="password" class="form-control" type="text" placeholder="Enter Password" required="" aria-required="true">
                     </div>
                     <div class="checkbox form-group">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="remember" name="remember">
                           <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a class="a-quang" href="">Forgot Password</a>
                     </div>
                     @error('password')
                        <div class="" >
                            <span class="error-existingUser">{{ $message }}</span>
                        </div>
                        @enderror
                     @if(session('existingUser'))
                     <div class="" >
                        <span class="error-existingUser">{{ session('existingUser')['message'] }}</span>
                     </div>
                     @endif
                     @if (session('error'))
                    <div class="error-existingUser">
                        {{ session('error') }}
                    </div>
                    @endif
                     <div class="form-group">
                        <button type="submit" class="_btn_04">
                           <div class="a-quang">Login</div>
                        </button>
                     </div>
                     <div class="form-end">
                        <div>Don't have an account ? <a href="{{Route('register')}}">Sign up </a></div>
                     </div>
                  </div>
               </form>
               <!-- end form  -->
            </div>
         </div>
      </div>
   </div>
</div>



@endsection