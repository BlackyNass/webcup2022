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

    public function mount()
    {
        $this->capsules = Capsule::retrieveByUtilisateurId(auth()->user()->id)->get()->toArray();
        $this->factures = Facture::retrieveByUtilisateurId(auth()->user()->id)->get()->toArray();

        $this->offres = Capsule::all(); 

        //dd($factures);
    }

    public function render()
    {
        return view('livewire.dashboard-capsule');
    }
}
