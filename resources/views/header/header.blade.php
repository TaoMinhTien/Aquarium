<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class = "container-hieu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{"/"}}">
              <img src="{{ asset('asset/Image/logo.jpg') }}" alt="Logo" width="100" height="89" class="d-inline-block align-text-top">
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
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

    </div>