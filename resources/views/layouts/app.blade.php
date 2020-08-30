<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Express Logistics and Courier</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    </div>
</body>
</html>
