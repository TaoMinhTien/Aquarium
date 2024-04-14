<head>
   <div>
      @php
      if (Auth::check()) {
      echo '<a href="' . route('logout') . '">Logout</a>';
      } elseif (Request::is('login')) {
      echo '<a href="' . route('register') . '">Register</a>';
      } else {
      echo '<a href="' . route('login') . '">Login</a>';
      }
      @endphp
   </div>
</head>