<?php

namespace Database\Seeders;

use App\Models\Malfunction;
use Illuminate\Database\Seeder;

class MalfunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Malfunction::factory()
            ->count(5)
            ->create();
    }
}
