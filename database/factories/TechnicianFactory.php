<?php

namespace Database\Factories;

use App\Models\Technician;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechnicianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Technician::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthdate' => $this->faker->date,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
