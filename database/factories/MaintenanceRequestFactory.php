<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MaintenanceRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaintenanceRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reason' => $this->faker->text(255),
            'device_company' => $this->faker->text(255),
            'device_mark' => $this->faker->text(255),
            'device_model' => $this->faker->text(255),
            'status' => 'submission',
            'customer_id' => \App\Models\Customer::factory(),
        ];
    }
}
