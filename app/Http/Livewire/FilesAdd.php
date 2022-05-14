<?php

namespace App\Http\Livewire;

use App\Models\CapsuleData;
use App\Models\DetailFacture;
use App\Models\TypeDonnee;
use Livewire\Component;
use Livewire\WithFileUploads;
use DB;

class FilesAdd extends Component
{

    use WithFileUploads;

    public $capsule_id = null;
    public $facture_id = null;
    public CapsuleData $capsule_data;
    public DetailFacture $detail_facture;
    public $type_donnees = null;

    protected $rules = [
        'capsule_data.descriptif' => 'required',
        'capsule_data.data' => 'max:1024',
        'capsule_data.date_data' => 'required',
        'detail_facture.type_donnee_id' => 'required',
    ];


    public function mount($capsule_id)
    {
        $this->type_donnees = TypeDonnee::all();

        $this->capsule_data = new CapsuleData();
        $this->detail_facture = new DetailFacture();
        $this->capsule_id = $capsule_id;
        $this->facture_id = DB::table('facture')
            ->join('detail_facture', 'detail_facture.facture_id', '=', 'facture.id')
            ->join('capsule_data', 'capsule_data.detail_facture_id', '=', 'detail_facture.id')
            ->join('capsule', 'capsule_data.capsule_id', '=', 'capsule.id')
            ->select('facture.id')->get()->first()->id;
    }

    public function add_capsule_data()
    {
        if($this->detail_facture->type_donnee_id == null){
            $this->detail_facture->type_donnee_id = TypeDonnee::first()->id;
        }
        $this->detail_facture->prix_unitaire = 0;
        $this->validate($this->rules);
        $this->detail_facture->facture_id = $this->facture_id;
        $this->detail_facture->save();
        $this->capsule_data->capsule_id = $this->capsule_id;
        $this->capsule_data->data->store('files');
        $this->capsule_data->detail_facture_id = $this->detail_facture->id;
        dd($this->capsule_data);
        $this->capsule_data->save();
    }

    public function render()
    {
        return view('livewire.files-add');
    }
}
