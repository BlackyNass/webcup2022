<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Capsule;
use App\Models\CapsuleData;
use App\Models\DetailFacture;
use \App\Models\Facture;
use App\Models\TypeDonnee;
use DB; 

class DashboardCapsule extends Component
{

    public $capsules    = [];
    public $factures    = [];
    public $offres      = [];
    public $with_buttons = true; 

    public function is_linked($capsule_id){
        dd($this->capsules);
        return in_array(Capsule::find($capsule_id), $this->capsules);
    }

    public function commanderCapsule ($capsule_id) {
        if(!$this->is_linked($capsule_id)){
            $facture = new Facture();
            $facture->utilisateur_id = auth()->id();
            $facture->total = 0;
            $facture->save();

            $detail_facture = new DetailFacture();
            $detail_facture->facture_id = $facture->id;
            $detail_facture->type_donnee_id = TypeDonnee::first()->id;
            $detail_facture->prix_unitaire = 0;
            $detail_facture->save();

            $capsule_data = new CapsuleData();
            $capsule_data->detail_facture_id = $detail_facture->id;
            $capsule_data->capsule_id = $capsule_id;
            $capsule_data->descriptif = "";
            $capsule_data->data = "";
            $capsule_data->date_data = date("Y-m-d H:i:s");;
            $capsule_data->save();
            session()->flash('message', 'Commande effectué !');
        }
        else{
            session()->flash('message', 'Commande Impossible vous avez déjà utilisé cette capsule !');
        }
    }

    public function payerFacture($facture_id) {

    }

    public function send_facture_id($id){
        $this->emit('update_facture_id', $id);
    }

    protected $listeners = ['update'];
    public function update(){
        $this->factures = Facture::retrieveByUtilisateurId(auth()->user()->id)->get()->toArray();
    }

    public function mount()
    {
        $this->capsules = Capsule::retrieveByUtilisateurId(auth()->user()->id)->get()->toArray();
        $this->factures = Facture::retrieveByUtilisateurId(auth()->user()->id)->get()->toArray();

        $this->offres = Capsule::all(); 

        // dd($this->capsules);
    }

    public function render()
    {
        return view('livewire.dashboard-capsule');
    }
}
