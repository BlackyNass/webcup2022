<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aeternitas</title>
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
    @livewireStyles
</head>

<body class="index white">
    <header class="foi-header landing-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
                @if (Auth::check())
                <a class="navbar-brand " href="{{  route('admin.dashboard') }}" style="font-weight: bold; font-size: 1em">
                    <img src="{{asset('css/logo-aeternitas-webcup2.jpg')}}" width="250" alt="Logo aeternitas ">
                </a>
            @else
            <a class="navbar-brand " href="{{  url('/') }}" style="font-weight: bold; font-size: 1em">
                <img src="{{asset('css/logo-aeternitas-webcup2.jpg')}}" width="250" alt="Logo aeternitas ">
            </a>
            @endif
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">ACCUEIL</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('presentation')}}">PRESENTATION</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services')}}">OFFRES ET SERVICES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item mr-2 mb-3 mb-lg-0">
                            <a class="btn btn-secondary" href="{{ route('register')}}">S'INSCRIRE</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" href="{{ route('login')}}">SE CONNECTER</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('header-content')
        </div>
    </header>
    @yield('content')
    <footer class="foi-footer text-white">
        <div class="container">
            <div class="row footer-content">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <h2 class="mb-0">Une question ou une demande particulière ?  </h2>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 py-3 py-md-0 d-md-flex align-items-center justify-content-end">
                    <a href="{{route('contact')}}" class="btn btn-danger btn-lg">Contactez-nous
                    </a>
                </div>
            </div>
            <div class="row footer-widget-area">
                <div class="col-md-3">
                   
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                 
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <p>
                        &copy; Aeternitas. 2022
                    </p>
                    <p>Tous droits reservés.</p>

                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('theme/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    @livewireScripts
</body>

</html>