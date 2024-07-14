<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ReplacementPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplacementPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReplacementPart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'name_ar' => $this->faker->text(255),
            'details' => $this->faker->sentence(20),
            'quantity' => $this->faker->randomNumber,
            'cost' => $this->faker->randomNumber(1),
            'price' => $this->faker->randomFloat(2, 0, 9999),
            'part_category_id' => \App\Models\PartCategory::factory(),
        ];
    }
}
