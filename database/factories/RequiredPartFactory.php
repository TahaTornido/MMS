<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\RequiredPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequiredPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequiredPart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'details' => $this->faker->sentence(20),
            'part_category_id' => \App\Models\PartCategory::factory(),
            'malfunction_id' => \App\Models\Malfunction::factory(),
        ];
    }
}
