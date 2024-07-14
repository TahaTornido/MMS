<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\CustomerService;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerService::class;

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
