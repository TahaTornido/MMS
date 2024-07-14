<?php

namespace Database\Factories;

use App\Models\Diagnosis;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiagnosisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diagnosis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => 'pending',
            'transfer_date' => $this->faker->date,
            'receipt_id' => \App\Models\Receipt::factory(),
            'technician_id' => \App\Models\Technician::factory(),
        ];
    }
}
