<div>
    <div class="row">
        <div class="col-6">
            <h2 id="hoverable-rows"><div>Mes capsules<a class="anchorjs-link " href="#hoverable-rows" aria-label="Anchor" data-anchorjs-icon="#" style="padding-left: 0.375em;"></a></div></h2>
            <button type="button" class="btn btn-outline-dark">Dark</button>
            <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Durée</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($capsules as $capsule)
                  <tr>
                    <td >{{$capsule->libelle}}</td>
                    <td >{{$capsule->duree}}</td>
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
            <h2 id="hoverable-rows"><div>Mes factures<a class="anchorjs-link " href="#hoverable-rows" aria-label="Anchor" data-anchorjs-icon="#" style="padding-left: 0.375em;"></a></div></h2>

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
                    <td >{{$facture->created_at}}</td>
                    <td >{{$facture->total}}</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Aucune facture </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
