<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('asset/css/theme-hieu.css') }}">
   <script src="{{ asset('asset/js/theme-hieu.js') }}"></script>
   <script src="{{ asset('asset/js/theme_quang.js') }}"></script>
</head>

<body>
   @include('header.header_admin')
   <div class="container_dashboard" id="container_dashboard">
      <div class="row g-0 text-center">
         <div class="col-6 col-md-2">
            @include('layout.siderbar')
         </div>
         <div class="col-sm-6 col-md-10 mt-5">
            <h4>Admin Dashboard</h4>
            @yield('content')
         </div>
      </div>
   </div>
</body>

</html>