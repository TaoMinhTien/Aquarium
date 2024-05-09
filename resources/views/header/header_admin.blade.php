    <div class="navbar mb-10 navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{ asset('asset/Image/logo.jpg') }}" alt="Logo" width="100" height="89" class="d-inline-block align-text-top">
        </a>
        <div class="flex ">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
              @php
              if (Auth::check()) {
              echo '<li class="nav-item"><a class="nav-link" href="' . route('logout') . '">Logout</a></li>';
              } else {
              echo '<li class="nav-item"><a class="nav-link" href="' . route('login') . '">Login</a></li>';
              }
              @endphp
            </ul>
          </div>
        </div>
      </div>
    </div>