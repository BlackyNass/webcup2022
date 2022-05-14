<div>
    <div class="row">
        <div class="col-6">
            <h2 id="hoverable-rows">
                <div>
                    Mes capsules
                </div>
            </h2>
            
            <table class="table " >
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Durée </th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($capsules as $capsule)
                  <tr>
                    <td >{{$capsule['libelle']}}</td>
                    <td >{{$capsule['duree']}}</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Aucune capsule</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
        </div>
        
        <div class="col-6">
            <h2 id="hoverable-rows">Mes factures </h2>

            <table class="table table-hover table-dark ">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>

                  @forelse ($factures as $facture)
                  <tr>
                    <td >{{date('d/m/Y', strtotime($facture['created_at']))}}</td>
                    <td >{{number_format($facture['total'], 2)}} €</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Aucune facture </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
        </div>


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
    </div>
</div>
