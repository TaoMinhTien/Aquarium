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
                  <form action="{{Route('register.edit')}}" method="post">
                     @csrf
                     <div class="form-main">
                        <div class="logo">
                           <img src="" alt="logo">
                        </div>
                        <div class="form-group-rg">
                           <input type="fullname" name="fullname" class="form-control " type="text" placeholder="Fullname">
                        </div>
                        <div class="form-group-rg">
                           <input type="email" name="email" class="form-control " type="text" placeholder="Email">
                        </div>
                        <div class="form-group-rg">
                           <input type="password" name="password" class="form-control" type="Password" placeholder="Password">
                        </div>
                        @error('password')
                        <div class="">
                           <span class="error-rg">{{ $message }}</span>
                        </div>
                        @enderror
                        @error('email')
                        <div class="">
                           <span class="error-rg">{{ $message }}</span>
                        </div>
                        @enderror
                        @error('fullname')
                        <div class="">
                           <span class="error-rg">{{ $message }}</span>
                        </div>
                        @enderror
                        <div class="form-group">
                           <button type="submit" class="_btn_04">
                              <div class="a-quang">Register</div>
                           </button>
                        </div>
                        <div class="form-end">
                           <div>You have account? <a href="{{Route('login')}}">Sign in</a></div>
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