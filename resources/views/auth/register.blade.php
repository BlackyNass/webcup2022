@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Créez mon votre compte et accedez à toutes nos fonctionnalitées</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nom <sup>*</sup></label>
                                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nom">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirmation du mot de passe <sup>*</sup></label>
                                        <input type="password" class="form-control @error('password-confirm') is-invalid @enderror" id="password-confirm" name="password_confirmation" placeholder="Confirmation du mot de passe">
                                    </div>
                                    <button class="btn btn-sm " style="background-color: #ED156D; color:#fff" type="submit">Valider la création du compte</button>
                                </form>
                                <p class="mb-0">
                                    <a href="{{ route('login')}}" class="text-dark font-weight-bold">Déjà un compte? Connectez vous</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="{{asset('css/undraw_done_re_oak4.svg')}}" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

@endsection
