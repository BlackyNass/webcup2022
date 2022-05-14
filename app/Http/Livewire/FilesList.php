<?php

namespace App\Http\Livewire;

use App\Models\Capsule;
use App\Models\CapsuleData;
use Livewire\Component;

class FilesList extends Component
{
    public $capsule_data = null;

    public function mount($capsule_id){
        $this->capsule_data = CapsuleData::where('capsule_id', $capsule_id)->get();
    }

    public function delete_capsule_data($id){
        dd($id);
    }

    public function render()
    {
        return view('livewire.files-list');
    }
}
