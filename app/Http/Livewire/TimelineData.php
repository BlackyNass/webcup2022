<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;
use Illuminate\Support\Carbon;

class TimelineData extends Component
{

    public function init_data()
    {
        $capsule_data = DB::table('capsule_data')
            ->join('detail_facture', 'capsule_data.detail_facture_id', 'detail_facture.id')
            ->join('facture', 'facture.id', 'detail_facture.facture_id')
            ->where('facture.utilisateur_id', auth()->id())
            ->get()->all();
        $data = array();
        foreach ($capsule_data as $capsule_single_data) {
            $start_date = Carbon::createFromFormat('Y-m-d', $capsule_single_data->date_data);
            $start_year = $start_date->year;
            $end_year = $start_date->addMonths(1)->year;
            $start_month = $start_date->month;
            $end_month = $start_date->addMonths(1)->month;
            array_push(
                $data,
                array(
                    "start_date" => $start_month.'/'.$start_year,
                    "end_date" => $end_month.'/'.$end_year,
                    "descriptif" => $capsule_single_data->descriptif,
                    "plus" => "lorem",
                    )
            );
        }
        $this->dispatchBrowserEvent('init-timeline', ['data' => json_encode($data)]);
    }

    public function render()
    {
        return view('livewire.timeline-data');
    }
}
