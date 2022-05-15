


<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Nos capsules</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

    @forelse ( $offres as $offre)
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('css/'.$offre->illustration) }}'); background-position:center; ">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="">{{ $offre->libelle }}</h2>

                @if ($with_buttons)
                    
                    <ul class="d-flex list-unstyled mt-auto">

                        <li class="d-flex align-items-center">
                            <button type="button" class="btn btn-light" wire:click="commanderCapsule({{$offre->id}})" >Commander cette capsule</button>
                        </li>
                    </ul>
                @endif

            </div>
            </div>
        </div>
    @empty
        
    @endforelse
   
    </div>
  </div>