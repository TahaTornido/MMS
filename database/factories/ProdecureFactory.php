<?php

namespace Database\Factories;

use App\Models\Prodecure;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdecureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prodecure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'procedure' => $this->faker->text(255),
            'details' => $this->faker->sentence(20),
        ];
    }
}
