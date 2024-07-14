<?php

namespace Database\Seeders;

use App\Models\RequiredPart;
use Illuminate\Database\Seeder;

class RequiredPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequiredPart::factory()
            ->count(5)
            ->create();
    }
}
