<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PartCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartCategory::class;

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
        ];
    }
}
