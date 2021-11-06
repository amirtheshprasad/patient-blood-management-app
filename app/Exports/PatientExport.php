<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;

class PatientExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
  

    public function collection()
    {
        
        return Patient::join('bloodpressure', 'bloodpressure.patient_id', '=', 'patient.id')
        ->get(['patient.id', 'patient.name', 'patient.date_of_birth', 'bloodpressure.sbp', 'bloodpressure.dbp']);
    }
}
