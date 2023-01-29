<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-mutate-approach="sync"></script>
</head>
<body>
    <div id="app" style="width: 100%;">
        @yield('header-sp')
        @yield('nav-menu')
        <div class="container">
            <header id="header">
                @yield('header')
                @yield('headerCategory')
            </header>
            <main id="main">
                @yield('title-sp')
                @yield('content')
                @yield('comments')
                @yield('postedComments')
                @yield('categoryMenu')
                @yield('categoryMenuCategory')
            </main>
            <footer id="footer">
                <small>&copy; 2023 Kisiemon</small>
            </footer>
        </div>
    </div>
    <script src="{{asset('/assets/js/app.js')}}"></script>
</body>
</html>
