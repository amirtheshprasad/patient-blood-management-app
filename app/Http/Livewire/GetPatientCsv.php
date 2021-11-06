<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\PatientExport;
use Maatwebsite\Excel\Facades\Excel;

class GetPatientCsv extends Component
{
    public function download(){
        return Excel::download(new PatientExport, 'patient.csv');
    }
    public function render()
    {
        return view('livewire.get-patient-csv');
    }
}
