<?php

namespace Database\Factories;

use App\Models\Deliverable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliverableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deliverable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'warranty_time' => $this->faker->time,
            'warranty_details' => $this->faker->text,
            'date' => $this->faker->date,
            'invoice_ammount' => $this->faker->randomNumber(1),
            'discount_ammount' => $this->faker->randomNumber(1),
            'total_ammount' => $this->faker->randomNumber(1),
            'notes' => $this->faker->text,
            'receipt_id' => \App\Models\Receipt::factory(),
        ];
    }
}
