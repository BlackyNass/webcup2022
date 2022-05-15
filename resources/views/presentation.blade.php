@extends('layouts.main')

@section('content')
<main class="page-about">
    <div class="container">
        <section class="page-header">
            <h1 style="color: #43b24a">“Ô temps suspends ton vol”</h1>
        </section>
        <section class="mt-4 pt-0">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0 pr-lg-0">
                
                    <div class="about-section-one-content" style="text-align: justify">
                        <p>
                            <i>“Eh quoi ! n’en pourrons-nous fixer au moins la trace ?
Quoi ! passés pour jamais ! quoi ! tout entiers perdus !
Ce temps qui les donna, ce temps qui les efface,
Ne nous les rendra plus !
Eternité, néant, passé, sombres abîmes”,</i>
<br>
<strong>“Le Lac" A. de Lamartine</strong>
                        </p>

                        
                    </div>
                </div>
                <div class="col-md-6 pl-lg-0 d-flex align-items-center align-items-lg-end">
                    <img src="{{ asset('css/undraw_season_change_f99v.svg')}}" alt="about" class="img-fluid" width="600">
                </div>
            </div>
        </section>
        <section class="mt-4">
            <div class="row">

                <div class="col-12">
                    <h2 class="about-section-two-title">Nous rendons vos meilleurs souvenirs éternels !</h2>
                    <div class="" style="text-align: justify">
                        <p>
                            Beaucoup se demandent sans doute ce qui se passera une fois que leur vie sur cette terre se sera terminée. Beaucoup aimeraient adresser un dernier message, figé dans le temps à leurs proches et descendants. L’aspiration à l’éternité est aussi vieille que l’humanité.
                        </p>
                        <p>

                            Le présent fait naître le souvenir mais l'homme seul, par la pensée, ne parvient pas à arrêter le temps sur un moment de bonheur, à ancrer son existence dans le mouvement inéluctable du temps, dans l'océan des âges. L'homme, comme un navigateur sur l'océan, traverse la vie, toujours poussé de façon involontaire par cette fuite du temps. Et ce temps est capricieux, il efface certains souvenirs mais en garde aussi intact certains. Comment faire revivre le souvenir du bonheur passé que le temps a estompé et le pérenniser à jamais ? 
                            
                        </p>
                        <p>

                            <h4 style="color: #44007a">AETERNITAS</h4> se propose de sauvegarder vos données dans des capsules temporelles sécurisées. Dans l’antiquité romaine le terme désignait la personnification divine de l'éternité.
                        </p>


<p>

    <h4 style="color: #44007a">AETERNITAS</h4> se veut comme témoin du temps et de votre vécu sur terre. Les souvenirs, les moments de vie figés dans nos capsules permettront de restituer à vos descendances, à l’humanité et/ou à toute forme de vivant dans l’univers qui nous entourent une part de votre passage sur terre.
</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-4 mb-5" style="text-align: justify">
            <h5 class="text-center font-os mb-5">Qui sommes nous ?</h5>
            
            <p>Nous sommes une équipe jeune constituée de talent divers. Nous avons à cœur de révolutionner l’existence humaine en lui permettant de rentrer dans une autre dimension.</p>
            <div class="row">
                <br>
                <div class="col-md-4 mb-4">
                    <div class="team-member-card">
                        <img src="{{asset('css/indi.jpg')}}" width="600" alt="Indi" class="team-member-avatar">
                        <h6 class="mb-0">Indi</h6>
                        <p class="team-member-designation">CEO</p>
                        <p class="team-member-designation">indi@aeternitas.fr</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member-card">
                        <img src="{{asset('css/abi.jpg')}}" width="600" alt="Abidine" class="team-member-avatar">
                        <h6 class="mb-0">Abidine</h6>
                        <p class="team-member-designation">COO</p>
                        <p class="team-member-designation">abidine@aeternitas.fr</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-member-card">
                        <img src="{{asset('css/moussa.jpg')}}" width="600" alt="Labeeba Al Amer" class="team-member-avatar">
                        <h6 class="mb-0">Moussa</h6>
                        <p class="team-member-designation">CTO</p>
                        <p class="team-member-designation">moussa@aeternitas.fr</p>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
</main>
@endsection