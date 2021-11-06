<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;

class CreatePatient extends Component
{
    public $form = [
        'name'                  => '',
        'email'                 => '',
        'date_of_birth'         => '',
        'patient_details' => '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.name'     => 'required',
            'form.date_of_birth' => 'required',
        ]);
        // dd($this->form);
        Patient::create($this->form);
        session()->flash('message', 'Patient record has been created sucessfully 😁');
        return redirect(route('patient'));
    }

    public function render()
    {
        return view('livewire.create-patient');
    }
}
