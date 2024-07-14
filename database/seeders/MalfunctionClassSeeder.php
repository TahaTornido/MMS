<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MalfunctionClass;

class MalfunctionClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MalfunctionClass::factory()
            ->count(5)
            ->create();
    }
}
