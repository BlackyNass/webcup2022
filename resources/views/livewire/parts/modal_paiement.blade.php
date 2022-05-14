

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">PAIEMENT D'UNE FACTURE </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <select class="form-select" aria-label="Default select example">
                <option selected>Mode de paiement</option>
                <option value="1">Carte bancaire</option>
                <option value="2">Crypto monnaie</option>
              </select>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Montant</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisir le montant">
              </div>

              <div class="paiement-carte">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titulaire de la carte </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisir le montant">
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numéro de la carte</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisir le montant">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mois expiration</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisir le montant">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Annee expiration</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisir le montant">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cryptogramme</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Saisir le montant">
                  </div>
              </div>

              <div class="paiement-crypto">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Portefeuille crypto à débiter</option>
                    <option value="1">BTC - Bitcoin </option>
                    <option value="2">CSC - Casinocoin</option>
                  </select>
              </div>

            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
  