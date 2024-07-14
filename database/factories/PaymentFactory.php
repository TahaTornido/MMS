<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ammount' => $this->faker->randomNumber(1),
            'date' => $this->faker->date,
            'notes' => $this->faker->text,
            'deliverable_id' => \App\Models\Deliverable::factory(),
        ];
    }
}
