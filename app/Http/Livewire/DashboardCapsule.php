<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Capsule; 
use \App\Models\Facture; 
use DB; 

class DashboardCapsule extends Component
{

    public $capsules    = [];
    public $factures    = [];
    public $offres      = [];


    public function commanderCapsule ($capsule_id) {

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

        $this->offres = [1,2,3,2]; 

        //dd($factures);
    }

    public function render()
    {
        return view('livewire.dashboard-capsule');
    }
}
