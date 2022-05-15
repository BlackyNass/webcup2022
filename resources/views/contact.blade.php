@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <section class="page-header">
            <h2>Vous avez des questions ? </h2>
        </section>

        <section class="contact-form-wrapper">
            <form method="POST" action="{{route('contact_send')}}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Votre nom <sup>*</sup></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{old('name')}}">
                        {!! $errors->first('name', '<span class="highlight">Veuillez saisir un nom valide</span>') !!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Votre adresse mail <sup>*</sup></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{old('email')}}">
                        {!! $errors->first('email', '<span class="highlight">Veuillez saisir un email valide</span>') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="subject">Sujet <sup>*</sup></label>
                        <input type="text" class="form-control" id="name" name="subject" placeholder="" value="{{old('subject')}}">
                        {!! $errors->first('subject', '<span class="highlight">Veuillez saisir un sujet valide</span>') !!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Téléphone <sup>*</sup></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{old('phone')}}">
                        {!! $errors->first('phone', '<span class="highlight">Veuillez saisir un numéro valide</span>') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="message">Message <sup>*</sup></label>
                        <textarea name="message" id="message" class="form-control" rows="7" placeholder="Bonjour, veuillez saisir votre message :) ...">{{old('message')}}</textarea>
                        {!! $errors->first('message', '<span class="highlight">Veuillez saisir un message</span>') !!}
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn mb-4" style="background-color: #ED156D; color:#fff">Soumettre ma demande</button>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection