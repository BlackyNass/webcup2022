<?php

namespace App\Http\Livewire;

use App\Models\Reglement;
use App\Models\Facture;
use App\Models\Wallet;
use App\Models\Cryptos;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class ModalPaiementContent extends Component
{
    public $mode_paiement;
    public $montant;
    public $titulaire;
    public $numero_carte;
    public $mois_exp;
    public $annee_exp;
    public $crypto;
    public $cryptos;
    public $crypto_id;
    public $facture_id;

    protected $rules = [];

    protected $listeners = ['update_facture_id'];

    public function update_facture_id($id)
    {
        $this->facture_id = $id;
    }

    public function mount()
    {
        $this->cryptos = Cryptos::all();
    }

    public function save()
    {
        if ($this->mode_paiement == 1) {
            $this->rules = [
                "montant" => 'required|numeric',
                "titulaire" => 'required',
                "numero_carte" => 'required',
                "mois_exp" => 'required',
                "annee_exp" => 'required',
                "crypto" => 'required'
            ];
        } elseif ($this->mode_paiement == 2) {
            $this->rules = [
                "montant" => 'required|numeric',
            ];
        } else {;
        }

        $this->validate($this->rules);

        if ($this->mode_paiement == 2) {
            if(empty($this->crypto_id)){
                $this->crypto_id = Cryptos::first()->id;
            }
            $wallet = Wallet::where('user_id', auth()->id())
            ->where('crypto_id', $this->crypto_id)->get()->first();
            if ($wallet != null) {
                if ($wallet->valeur > 0) {
                    $wallet->valeur--;
                    $wallet->save();
                } else {
                    session()->flash('message', 'Ressource insuffisante !');
                    return;
                }
            } else {
                session()->flash('message', 'Porte monnaie inexistant !');
                return;
            }
        }

        $reglement = new Reglement();
        $reglement->facture_id = $this->facture_id;
        $reglement->montant = $this->montant;
        $reglement->save();

        $facture = Facture::find($this->facture_id);
        $facture->acquite = true;
        $facture->save();
        session()->flash('message', 'enregistrement ok !');

        $this->emit('update');
    }


    public function render()
    {
        return view('livewire.modal-paiement-content');
    }
}
