<?php

namespace Database\Factories;

use App\Models\PartOption;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'details' => $this->faker->sentence(20),
            'choosen' => $this->faker->boolean,
            'warranty_time' => $this->faker->time,
            'required_part_id' => \App\Models\RequiredPart::factory(),
            'replacement_part_id' => \App\Models\ReplacementPart::factory(),
        ];
    }
}
