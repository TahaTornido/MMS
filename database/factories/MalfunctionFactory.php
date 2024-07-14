<?php

namespace Database\Factories;

use App\Models\Malfunction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MalfunctionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Malfunction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'details' => $this->faker->sentence(20),
            'date' => $this->faker->date,
            'wages' => $this->faker->randomNumber(1),
            'malfunction_class_id' => \App\Models\MalfunctionClass::factory(),
            'diagnosis_id' => \App\Models\Diagnosis::factory(),
            'prodecure_id' => \App\Models\Prodecure::factory(),
        ];
    }
}
