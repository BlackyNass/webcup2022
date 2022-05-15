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
        <td>{{date('d/m/Y',$facture['created_at'])}}</td>
        <td>{{number_format($facture['total'], 2)}} € 
          @if ($facture['acquite'])
          <a href="#" style="float: right" class="btn btn-success  m-1">Acquitée</a>
          @else
          <button wire:click="send_facture_id({{$facture['id']}})" style="float: right" type="button" class="btn btn-success  m-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Payer
          </button>
          @endif

          <button  style="float: right" type="button" class="btn btn-danger m-1" >
            PDF
          </button>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="2">Aucune facture </td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>