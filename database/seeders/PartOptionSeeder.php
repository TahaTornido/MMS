<?php

namespace Database\Seeders;

use App\Models\PartOption;
use Illuminate\Database\Seeder;

class PartOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartOption::factory()
            ->count(5)
            ->create();
    }
}
