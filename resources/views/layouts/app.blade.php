<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Express Logistics and Courier</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}" type="image/x-icon">

    <!-- Extra Meta -->
    <!--    FACEBOOK / TWITTER -->
    <meta property="og:title" content="Express Logistics and Courier Services">
    <meta property="og:description" content="Flexible, fast and reliable services with imformation about the current status of your goods!">
    <meta property="og:site_name" content="Express Logistics and Courier Services">
    <meta property="og:image" content="https://exlogcourier.com/img/favicon.jpg">
    <meta property="og:url" content="https://exlogcourier.com/">
    <meta name="twitter:card" content="summary_large_image">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- AOS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <script ></script> --}}
</head>
<body>
    <div id="app">
        @guest
            @if (Route::has('register'))
                <header-component has-register guest></header-component>
            @endif
        @else
            <header-component user-data="{{ json_encode(Auth::user()) }}"></header-component>
        @endguest

        <main class="py-0">
            @yield('content')
        </main>
        <footer-component></footer-component>
    </div>
    
        {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script> --}}
</body>
</html>
