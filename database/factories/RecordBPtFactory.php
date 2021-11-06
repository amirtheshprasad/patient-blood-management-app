<?php

namespace Database\Factories;
use App\Models\Patient;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordBPtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $regions = Patient::pluck('id');
        
        return [
            'patient_id' => $this->faker->randomElement($regions),
            'sbp' => $this->faker->numberBetween(0, 300),
            'dbp' => $this->faker->numberBetween(0, 300),
           
        ];
    }
}
