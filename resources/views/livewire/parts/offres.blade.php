<div class="col-12 " style="margin-top:10em;">
    <h2 id="hoverable-rows">
        <div>
            Capsules disponibles
        </div>
    </h2>
    <hr>

    @forelse ( $offres as $offre)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Commander</a>
            </div>
        </div>
    @empty
        
    @endforelse
   

</div>