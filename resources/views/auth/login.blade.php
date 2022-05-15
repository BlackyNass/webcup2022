@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <section class="auth-wrapper">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="auth-section-title">Connexion</h2>
                        <p class="auth-section-subtitle">Veuillez saisir vos identifiants.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email <sup>*</sup></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe <sup>*</sup></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe *">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
  
                            <button class="btn bt-sm btn-auth-submit" type="submit" style="background-color: #ED156D; color:#fff">Se connecter</button>
                        </form>
                        <p class="mb-0">
                            <a href="{{ route('register')}}" class="text-dark font-weight-bold">Nouvel utilisateur ? Créez votre compte</a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="{{asset('css/undraw_secure_login_pdn4.svg')}}" alt="login" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
