<?php

namespace Database\Factories;

use App\Models\Receipt;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_company' => $this->faker->text(255),
            'device_mark' => $this->faker->text(255),
            'device_model' => $this->faker->text(255),
            'details' => $this->faker->sentence(20),
            'is_boxed' => $this->faker->boolean,
            'broken' => $this->faker->boolean,
            'imei1' => $this->faker->text(255),
            'imei2' => $this->faker->text(255),
            'receipt_date' => $this->faker->date,
            'type_receipt' => 'new',
            'maintenance_request_id' => \App\Models\MaintenanceRequest::factory(),
        ];
    }
}
