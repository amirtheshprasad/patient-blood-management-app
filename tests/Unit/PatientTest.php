<?php

namespace Tests\Unit;

use Tests\TestCase;

class PatientTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    

    public function test_create_patient_form(){
   
        $response = $this->get('/createpatient');
        $response -> assertStatus(302);
    }
    public function test_get_patient_csv(){
      
        $response = $this->get('/getpatientcsv');
        $response -> assertStatus(302);
    }
    public function test_get_home(){
     
        $response = $this->get('/');
        $response -> assertStatus(200);
    }
    public function test_get_dashboard(){
     
        $response = $this->get('/db');
        $response -> assertStatus(302);
    }
}
