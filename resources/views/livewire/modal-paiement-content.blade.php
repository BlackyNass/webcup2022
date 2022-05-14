<div>
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PAIEMENT D'UNE FACTURE </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <select class="form-select" aria-label="Default select example" wire:model="mode_paiement">
            <option selected>Mode de paiement</option>
            <option value="1">Carte bancaire</option>
            <option value="2">Crypto monnaie</option>
        </select>

        <form wire:submit.prevent="save">
            @if($mode_paiement == 1)
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Montant</label>
                <input class="form-control" type="text" wire:model="montant">
                @error('montant') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulaire de la carte</label>
                <input class="form-control" type="text" wire:model="titulaire">
                @error('titulaire') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Numéro de la carte</label>
                <input class="form-control" type="text" wire:model="numero_carte">
                @error('numero_carte') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mois d'expiration</label>
                <input class="form-control" type="text" wire:model="mois_exp">
                @error('mois_exp') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Année d'expiration</label>
                <input class="form-control" type="text" wire:model="annee_exp">
                @error('annee_exp') <span class="error">{{ $message }}</span> @enderror
            </div>
            @elseif($mode_paiement == 2)
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Montant</label>
                <input class="form-control" type="text" wire:model="montant">
                @error('montant') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cryptogramme</label>
                <input class="form-control" type="text" wire:model="crypto">
                @error('crypto') <span class="error">{{ $message }}</span> @enderror
            </div>
            <select class="form-select" aria-label="Default select example" wire:model="crypto_id">
                <option selected>Portefeuille crypto à débiter</option>
                @foreach($cryptos as $crypto)
                <option value="{{$crypto->id}}">{{$crypto->nom}}</option>
                @endforeach
            </select>
            @else
            @endif
        </form>

    </div>
    @if($mode_paiement != "")
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button wire:click="save" class="btn btn-primary">Enregistrer</button>
    </div>
    @endif
</div>