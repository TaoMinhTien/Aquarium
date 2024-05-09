<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <div class="container-hieu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand m-0 p-0" href="{{"/"}}">
          <img src="{{ asset('asset/Image/logo.jpg') }}" alt="Logo" width="90" class="d-inline-block align-text-top m-0 p-0">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{"/"}}">Home</a>
            </li>

            <li class="nav-item has-dropdown">
              <a class="nav-link" href="#">Animals</a>
              <ul class="nav-dropdown">
                <li class="nav-dropdown-item">
                  <a class="nav-link" href="#">Details</a>
                </li>
                <li class="nav-dropdown-item">
                  <a class="nav-link" href="#">Places</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('tickets')}}">Ticket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('news.view')}}">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact.view')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('feedback')}}">Feedback</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            @php
            if (Auth::check()) {
            echo '<li class="nav-item"><a class="nav-link" href="' . route('logout') . '">Logout</a></li>';
            } else {
            echo '<li class="nav-item"><a class="nav-link" href="' . route('login') . '">Login</a></li>';
            }
            @endphp
            <li class="nav-item Homepage-cart">
              <a class="header-cart-png" href="/cart">
                <svg class="bi bi-cart" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
              </a>
              <span id="cartCount"></span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>