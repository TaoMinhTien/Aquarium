<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
   </script>
   <link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">
</head>
<body>
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
                        <div class="">
                           <span class="error-existingUser">{{ $message }}</span>
                        </div>
                        @enderror
                        @if(session('existingUser'))
                        <div class="">
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
</body>