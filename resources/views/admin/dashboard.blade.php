<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title')</title>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('asset/css/theme-hieu.css') }}">
   <script src="{{ asset('asset/js/theme-hieu.js') }}"></script>
   <script src="{{ asset('asset/js/theme_quang.js') }}"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>

</head>

<body>
   @include('header.header_admin')
   <div class="container-quang">
      <div class="grid grid-cols-1 lg:grid-cols-6">
         <div class="">
            @include('layout.siderbar')
         </div>
         <div class=" rounded-lg lg:col-span-5">
            <span class="flex justify-center">Hello (name admin)</span>
            <div class="flex py-3 justify-end border-t border-gray-500"></div>
            @yield('content')
         </div>
      </div>
   </div>
</body>

</html>