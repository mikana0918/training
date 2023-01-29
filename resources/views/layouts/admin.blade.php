<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel')  }}  - 管理画面</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
{{--        @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
        <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">

    </head>
    <body id="manage">
        <div id="app" style="width: 100%;">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/dashboard') }}">
                        {{ config('app.name', 'Laravel')  }}  - 管理画面
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="contents_separate">
            <div class="header">
                <ul>
                    <li class="header-name">管理画面</li>
                    <a href="{{route('dashboard')}}"><li class="tab is-active">記事一覧</li></a>
                    <a href="{{route('dashboard.article.create')}}" class="tab"><li class="tab">新規投稿</li></a>
                </ul>
            </div>
            <div class="main">
                <div class="main-contents">
                    <ul>
                        {{--            <li><a href="{{route('article.create')}}" class="btn">新規投稿</a></li>--}}
                    </ul>
                    <div class="contents">
                        <div class="contents-list">
                            @yield('article.list')
                            @yield('article.post')
                            @yield('postedComments')
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <script src="{{asset('/assets/js/app.js')}}"></script>--}}
    </body>
</html>
