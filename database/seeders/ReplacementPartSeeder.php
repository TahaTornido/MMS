<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReplacementPart;

class ReplacementPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReplacementPart::factory()
            ->count(5)
            ->create();
    }
}
