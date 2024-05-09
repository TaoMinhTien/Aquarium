<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('asset/css/theme-hieu.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-inforTable.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-overview.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-coralreef.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-dolphin.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-fishes.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-shark.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-seaturtle.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-octopus.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-kelpforest.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-openocean.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-mangroveswamp.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-guide1.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-thanh-guide2.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme-tien.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('asset/js/theme-hieu.js') }}"></script>
    <script src="{{ asset('asset/js/theme-thanh.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
    <script type="module" src="{{ asset('asset/js/ticketview.js') }}"></script>
    <script src="{{ asset('asset/js/theme_quang.js') }}"></script>
</head>

<body>

    @include('header.header')
    @yield('content')
    @include('footer.footer')

</body>

<script>

</script>

</html>