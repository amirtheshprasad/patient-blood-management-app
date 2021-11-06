<?php

namespace Tests\Unit;

use Tests\TestCase;

class BloodpressureTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_recordbp(){
        $response = $this->get('/recordbp');
        $response -> assertStatus(302);
    }
}
