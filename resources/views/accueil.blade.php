@extends('layouts.main')

@section('header-content')
<div class="header-content" style="padding-top: 2em!important">
    <div class="row">
        <div class="col-md-6" style="text-align: justify">
            <h3>Qui n'a pas un jour rêvé de transmettre aux générations futures un
                témoignage de son existence ?
                </h3>
                <p class="foi-review-content">
                    La quête d’une vie éternelle a toujours fasciné l’être humain. A défaut de pouvoir dompter la mort, chacun de nous s’évertue à laisser une trace indélébile sur Terre.

                Des dizaines de milliers de clients particuliers ont déjà fait confiance à AETERNITAS pour les aider à formaliser et conserver une trace de leurs passage sur terre.
                    
                </p>
            <a href="{{ route('register')}}" class="btn mb-4" style="background-color: #ED156D; color:#fff">COMMENCEZ</a>

        </div>
        <div class="col-md-6">
            <img src="{{ asset('css/undraw_stars_re_6je7.svg')}}" alt="app" width="450px" class="img-fluid">
        </div>
    </div>
</div>
@endsection
@section('content')
<section class="py-5 mb-4">
    <div class="container">
        <h2 class="section-title">Modes de stockage de vos données</h2>
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5>Enfouissement sous terre</h5>
                <p class="text-dark" style="text-align: justify">
                    il s’agit de l’offre la plus avantageuse. Accessible au plus grand nombre, il permet un stockage dans un environnement de relative proximité et facilite l'accès aux données aux proches et descendants. Il est à privilégier 
                    pour le stockage de données pour une durée relativement courte.
                </p>
                
                <h5>En orbite autour de la lune</h5>
                <p class="text-dark" style="text-align: justify">
                    grâce à des satellites les plus durables que l'homme ait jamais fabriqués. Les satellites et les vaisseaux spatiaux présentes la garantie de rester en orbite quasi éternellement. Offrant la garantie de perpétuer 
                    l’héritage de nos souvenirs au-delà même de l’espèce humaine.
                </p>
                
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h5>Catapulte électromagnétique</h5>
                <p class="text-dark" style="text-align: justify">
                    c’est une méthode proposée pour la propulsion spatiale sans fusée, qui utilise un moteur linéaire pour accélérer des charges à haute vitesse. Une méthode qui a fait ces preuves et permettant d’envoyer 
                    les données dans des environnement au-delà du système solaire. 
                </p>
                
      
            </div>
            <div class="col-lg-4">
                <h6 class="text-gray font-os font-weight-semibold">NOS PARTENAIRES DE CONFIANCE</h6>
                <div id="landingClientCarousel" class="carousel slide landing-client-carousel" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="d-flex flex-wrap justify-content-center">
                              
                                    <img src="{{asset('css/nasa.png')}}" alt="Slack" class="img-fluid">
                               
                            
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex flex-wrap justify-content-center">
                              
                                    <img src="{{asset('css/Colas_logo_vector.png')}}" alt="Slack" class="img-fluid">
                             
                           
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex flex-wrap justify-content-center">
                             
                                    <img src="{{asset('css/ariane_espace.png')}}" alt="Slack" class="img-fluid">

                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#landingClientCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#landingClientCarousel" data-slide-to="1"></li>
                        <li data-target="#landingClientCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

@include('livewire.parts.offres', ['with_buttons' => false])

<section class="py-5 mb-4" style="padding: 2em; background-color: #eaf0f1; border-radius:10px; ">
    <div class="container">
        <h2 style="color: #ED156D">Temoignages clients</h2>
        <p class="text-muted mb-5">Nos clients parlent de leurs expériences !</p>
        <div class="row" style="text-align: justify">
            <div class="col-md-4 foi-review mb-5 mb-md-0">
                <div class="foi-rating">
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                </div>
                <h5 class="foi-review-heading">Perpétuer l’héritage familial</h5>
                <p class="foi-review-content">
                    Au fil des ans, j'ai passé de nombreuses heures à rechercher de vieilles photos et à documenter l'histoire de notre lignée. 

                    La solution AETERNITAS permet de rassembler facilement les photos et les souvenirs en un seul endroit.  Des archives d’images photographiques en noir et blanc, conçues pour durer des milliards d'années
                    En stockant l'histoire de nos vies et en laissant des messages privés à nos enfants et petits-enfants, nous créons un héritage qui vivra à jamais.
                </p>
                <div class="media foi-review-user">
                    <div class="media-body">
                        <h6 class="mb-0">Bacar A</h6>
                    </div>
                </div>

            </div>
            <div class="col-md-4 foi-review mb-5 mb-md-0">
                <div class="foi-rating">
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                </div>
                <h5 class="foi-review-heading">Placer mes oeuvres d’art dans l’espace</h5>
                <p class="foi-review-content">
                    En tant qu’artiste je souhaitais perpétuer mon œuvre en luttant contre les effets terrestres de la rouille, de l'érosion et de la décomposition.
                    J’ai opté pour le lancement en orbite à bord d'un satellite. Les satellites et les vaisseaux spatiaux présentent  la garantie de rester en orbite quasi éternellement.
                    Le seul endroit qui me semblait inaltérable était l’espace. Ainsi mon art pouvait être partagé avec des formes autres qu’humaines.
                    Cette expérience a complètement changé ma façon de regarder le ciel nocturne.
                    
                </p>
                <div class="media foi-review-user">
                    <div class="media-body">
                        <h6 class="mb-0">Salvador D</h6>
                    </div>
                </div>

            </div>
            <div class="col-md-4 foi-review mb-5 mb-md-0">
                <div class="foi-rating">
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                </div>
                <h5 class="foi-review-heading">Marquer l'histoire</h5>
                <p class="foi-review-content">J'ai toujours été un homme de changement,
                    Nous sommes en train de changer le monde, de changer l'histoire, et vous en êtes ou pas.
                    J'ai toujours fait parti de ceux qui ont voulu changer les règles.
                    Mon tweet annonçant le rachat de twitter a marqué l’histoire. A ce titre, il devrait être conservé pour les générations futures.
                    </p>
                <div class="media foi-review-user">
                    <div class="media-body">
                        <h6 class="mb-0">Elon M</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="py-5 mb-5">
    <div class="container">
        <h2>FAQ</h2>
        <p class="section-subtitle">Vous avez une question ? Vous pouvez trouver les réponses aux questions les plus courantes posées par nos clients.</p>
        <div class="row">
            <div class="col-lg-12">

                @forelse ($faqs as $faq)
                    
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqOneTitle">
                            <a href="#faqOneCollapse-{{$loop->index}}" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0"> {{ $faq->question}} </h6> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqOneCollapse-{{$loop->index}}" class="collapse" aria-labelledby="faqOneTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">{{ $faq->reponse}}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    
                @endforelse

            </div>
           
        </div>
    </div>
</section>

@endsection