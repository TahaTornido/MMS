<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerService;

class CustomerServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerService::factory()
            ->count(5)
            ->create();
    }
}
