<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Bloodpressure;

class Dashboard extends Component
{
    public $data = [
       
    ];

    public function render()
    {

        $data = Patient::join('bloodpressure', 'bloodpressure.patient_id', '=', 'patient.id')
        ->get(['patient.id', 'patient.name', 'patient.date_of_birth', 'bloodpressure.sbp', 'bloodpressure.dbp']);

        // dd($this->data);
        // ->get(['patient.id', 'patient.name', 'patient.date_of_birth', 'bloodpressure.sbp', 'bloodpressure.dbp']));
        // return view('livewire.dashboard')->with(compact(Patient::join('bloodpressure', 'bloodpressure.patient_id', '=', 'patient.id')
        // ->get(['patient.id', 'patient.name', 'patient.date_of_birth', 'bloodpressure.sbp', 'bloodpressure.dbp'])));
        // return view('livewire.dashboard', [
        //     'data' => Patient::join('bloodpressure', 'bloodpressure.patient_id', '=', 'patient.id')
        //     ->get(['patient.id', 'patient.name', 'patient.date_of_birth', 'bloodpressure.sbp', 'bloodpressure.dbp']),
        // ]);
        return view('livewire.admin.patient.patient-table');
    }
}
