@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <section class="py-5 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <img src="{{ asset('css/undraw_the_world_is_mine_re_j5cr.svg')}}" alt="special offers" class="img-fluid" width="492px" style="border-radius: 10px">
                            </div>
                            <div class="col-md-6" style="text-align: justify">
                                <h2 class="section-title">Laisser une trace de notre passage sur terre</h2>
                                <p class="mb-5">De tout temps, l’être humain a toujours rêvé d’une existence éternelle. Nombreux sont ceux qui se sont lancés dans diverses expérimentations. Une rumeur veut même que Walt Disney, le père de Mickey décédé en 1966, ait été cryogénisé après sa mort, rêvant sans doute d’une réincarnation future.
                                    <br>
                                    Contrairement aux prévisions du calendrier Maya, la fin du monde n’a pas eu lieu en 2012. Mais cette épisode aussi palpitante que angoissante a amené un certain nombre d’entre nous à nous poser des questions sur notre existence sur cette terre et plus généralement sur les traces que nous laisserons.
                                    <br>
                                   
            </p>
                                
                            </div>
                        </div>
                        @livewire('tableau-offres')
                        <div class="row mb-5">
                            <div class="col-12" style="padding: 2em; background-color: #eaf0f1; border-radius:10px; ">
                                <strong style="color: #ed156d"> AETERNITAS </strong> veut donner à chacun la possibilité de laisser une trace, un héritage, un souvenir, un message, une photo, une image, un document témoignant de notre passage sur terre.</h5>
                            </div>
                        </div>

                        <div class="row" style="text-align: justify">
                            
                            <div class="col-md-6 mb-3">
                                <div class="media landing-feature">
                                    <span class="landing-feature-icon"></span>
                                    <div class="media-body">
                                        <h5>Capsule mutualisée :</h5>
                                        <p>
                                            <ul>
                                                <li>Notre offre de base permettant un stockage des données dans des capsules partagées. </li>
                                                <li>Le principe repose sur le même modèle que l’hébergement mutualisé des sites Internet. </li>
                                                <li>Une offre économique qui répond à la même exigence en termes de sécurité et de protection de vos données.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="media landing-feature">
                                    <span class="landing-feature-icon"></span>
                                    <div class="media-body">
                                        <h5>Garantie sécurité</h5>
                                        <p>
                                            <ul>
                                                <li>Nous prenons la sécurité des données au sérieux. Garantir la conservation de vos données est notre priorité.
                                                    Grâce à nos capsules temporelles sécurisées vous avez la garantie d’une sauvegarde fiable de vos données personnelles.</li>
                                            </ul>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="media landing-feature">
                                    <span class="landing-feature-icon"></span>
                                    <div class="media-body">
                                        <h5>Capsule dédiée</h5>
                                        <p>
                                            <ul>
                                             <li>Choix géographique de l’emplacement </li>
                                             <li>Personnalisation des couleurs</li>
                                             <li>Support dédié 7J/7 - 24/24</li>
                                             <li>Page web dédiée : le livre de votre vie</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="media landing-feature">
                                    <span class="landing-feature-icon"></span>
                                    <div class="media-body">
                                        <h5>Confidentialité </h5>
                                        <p>
                                            <ul>
                                                <li>Par défaut, tout est privé. Vous pouvez partager des éléments avec votre famille et vos amis, ou les rendre publics. Nous tâchons de respecter strictement vos volontés. 
                                                </li>
                                            </ul>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection