<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ПГС') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/profile/profile.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<div id="app" class="h-100">
    @if(\Jenssegers\Agent\Facades\Agent::isMobile())
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    @guest
                    @else
                        <span class="d-block text-white"><small>{{ Auth::user()->name }}</small></span>
                    @endguest
                </a>
                @guest
                @else
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @endguest
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                @if( Auth::user()->speciality === 'admin')
                                    <a class="text-white nav-link d-flex align-items-center" href="{{ route('add-video') }}"><i class="material-icons md-24 md-light">cloud_upload</i><span class="ml-2">Добавить видео</span></a>
                                    <a class="text-white nav-link d-flex align-items-center" href="{{ route('generate') }}"><i class="material-icons md-24 md-light">cached</i><span class="ml-2">Генерировать коды</span></a>
                                    <a class="text-white nav-link d-flex align-items-center" href="{{ route('send') }}"><i class="material-icons md-24 md-light">send</i><span class="ml-2">Отправить код</span></a>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-white nav-link d-flex align-items-center"><i class="material-icons md-24 md-light">meeting_room</i><span class="ml-2">Выйти</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    @else
        <div id="wrapper" class="toggled h-100">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'ПГС') }}
                        </a>
                    </li>
                    <li>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="{{ route('login') }}"><i class="material-icons md-24 md-light">launch</i><span>Войти</span></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" href="{{ route('register') }}"><i class="material-icons md-24 md-light">how_to_reg</i><span>Регистрация</span></a>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <a class="text-uppercase text-white" href="{{ route('home')  }}">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    @if( Auth::user()->speciality === 'admin')
                                        <a class="nav-link d-flex align-items-center" href="{{ route('add-video') }}"><i class="material-icons md-24 md-light">cloud_upload</i><span>Добавить видео</span></a>
                                        <a class="nav-link d-flex align-items-center" href="{{ route('generate') }}"><i class="material-icons md-24 md-light">cached</i><span>Генерировать коды</span></a>
                                        <a class="nav-link d-flex align-items-center" href="{{ route('send') }}"><i class="material-icons md-24 md-light">send</i><span>Отправить код</span></a>
                                    @endif
                                    <a class="nav-link d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="material-icons md-24 md-light">meeting_room</i><span>Выйти</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper" class="h-100">
                @yield('content')
            </div>
        </div>
    @endif
</div>
@guest
    <script src="{{asset('js/app.js')}}"></script>
@else
    @if( Auth::user()->speciality === 'admin')
        <script src="{{asset('js/admin/admin.js')}}"></script>

    @else
        <script src="{{asset('js/profile/profile.js')}}"></script>
    @endif
@endguest

</body>
</html>
