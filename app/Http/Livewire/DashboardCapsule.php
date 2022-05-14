<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB; 

class DashboardCapsule extends Component
{

    public $capsules = [];
    public $factures = [];


    public function mount()
    {
        $capsules = DB::table('capsule')
        ->join('capsule_data', 'capsule_data.capsule_id', 'capsule.id')
        ->join('detail_facture', 'detail_facture.id', 'capsule_data.detail_facture_id')
        ->join('facture', 'facture.id', 'detail_facture.facture_id')
        ->join('utilisateur', 'utilisateur.id', 'facture.utilisateur_id')
        ->join('duree', 'capsule.duree_id', 'duree.id')
        ->where('utilisateur.id', '=', auth()->user()->id)
        ;

        $factures = DB::table('facture')
        ->join('utilisateur', 'utilisateur.id', 'facture.utilisateur_id')
        ->where('utilisateur.id', '=', auth()->user()->id)
        ;
    }

    public function render()
    {
        return view('livewire.dashboard-capsule');
    }
}
