<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bloodpressure;
use App\Models\Patient;
class RecordBloodPressure extends Component
{
    public $form = [
        'patient_id' => '',
        'sbp'=> '',
        'dbp' => '',
    ];
    public $null1 = "No record";
    public $patient;
    public function submit()
    {


        $this->validate([
            'form.patient_id' => 'required|exists:patient,id',
            
            'form.sbp' => 'required',
            'form.dbp' => 'required',
        ]);

        // dd($this->form);
        // $user = Patient::where('id', '=', $this->form.patient_id);
        // if ($user == null) {
        //     dd($this->null1);
        // }
        // dd($this->form);
        Bloodpressure::create($this->form);
        session()->flash('message', 'Blood pressure data record has been created successfully 😁');
        return redirect(route('bp'));
    }


    public function render()
    {
        return view('livewire.record-blood-pressure');
    }
}
