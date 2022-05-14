<div>
  <div class="row mb-2">

    <div class="col-6">

        <div class="small-box bg-dark p-3" style="border-radius: 0.5em; color: #fff">
            <div class="inner">
                <h3 id="stat_dossiers_collectes">0</h3>

                <p>NOMBRE DE SOUSCRIPTION</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>

        </div>
    </div>
    
    <div class="col-6">

        <div class="small-box bg-success p-3" style="border-radius: 0.5em; color: #fff">
            <div class="inner">
                <h3 id="stat_dossiers_valides">0</h3>

                <p>PLUS-VALUE GENERES</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            
        </div>
    </div>

</div>
<br>
    <div class="row">

      @include('livewire.parts.capsules')
      
      @include('livewire.parts.factures')

      @include('livewire.parts.offres')
       
    </div>
</div>


@include('livewire.parts.modal_paiement')