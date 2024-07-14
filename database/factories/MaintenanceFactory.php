<?php

namespace Database\Factories;

use App\Models\Maintenance;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maintenance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'technican_notes' => $this->faker->text,
            'maint_date' => $this->faker->date,
            'status' => 'pending',
            'malfunction_id' => \App\Models\Malfunction::factory(),
            'technician_id' => \App\Models\Technician::factory(),
        ];
    }
}
