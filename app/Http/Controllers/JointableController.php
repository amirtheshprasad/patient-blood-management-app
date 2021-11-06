<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Bloodpressure;
use Illuminate\Support\Facades\Auth;

class JointableController extends Controller
{
    function index()
    {
    	$data = Patient::join('bloodpressure', 'bloodpressure.patient_id', '=', 'patient.id')
              		->get(['patient.id', 'patient.name', 'patient.date_of_birth', 'bloodpressure.sbp', 'bloodpressure.dbp']);
                    //   dd($data);
        return view('db', compact('data'));
        // return $data;
    }

    public function logout() 
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
