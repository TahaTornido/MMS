<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PartPurchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartPurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartPurchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->randomNumber,
            'date' => $this->faker->date,
            'cost' => $this->faker->randomNumber(1),
            'replacement_part_id' => \App\Models\ReplacementPart::factory(),
        ];
    }
}
