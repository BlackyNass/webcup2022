<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- <link href="{{ asset('timesheet/timesheet.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('vertical-timeline/assets/css/style.css') }}" rel="stylesheet">
    @yield('styless')
    @livewireStyles
</head>
<body class="index white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @if (Auth::check())
                    <a class="navbar-brand " href="{{  route('admin.dashboard') }}" style="font-weight: bold; font-size: 1em">
                        <img src="{{asset('css/logo-aeternitas-webcup2.jpg')}}" width="250" alt="Logo aeternitas ">
                    </a>
                @else
                <a class="navbar-brand " href="{{  url('/') }}" style="font-weight: bold; font-size: 1em">
                    <img src="{{asset('css/logo-aeternitas-webcup2.jpg')}}" width="250" alt="Logo aeternitas ">
                </a>
                @endif
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
                    <ul class="navbar-nav me-auto">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">MON TABLEAU DE BORD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.wallet') }}">PORTEFEUILLE CRYPTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.timeline') }}">VOIR MA TIMELINE DE DONNEES</a>
                        </li>
                            
                        @endauth
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('register'))
                                <li class="nav-item mr-2 mb-3 mb-lg-0">
                                    <a class="btn btn-secondary" href="{{ route('register')}}">S'INSCRIRE</a>
                                </li>
                            @endif

                            @if (Route::has('login'))
                                
                            <li class="nav-item">
                                <a class="btn btn-secondary" href="{{ route('login')}}">SE CONNECTER</a>
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
                                        Se deconnecter
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- <script src="{{asset('timesheet/timesheet.min.js')}}"></script> -->
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('vertical-timeline/assets/js/main.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @livewireScripts
</body>
</html>
