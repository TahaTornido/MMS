<?php

namespace Database\Seeders;

use App\Models\Deliverable;
use Illuminate\Database\Seeder;

class DeliverableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deliverable::factory()
            ->count(5)
            ->create();
    }
}
