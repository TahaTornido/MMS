<?php

namespace Database\Seeders;

use App\Models\PartPurchase;
use Illuminate\Database\Seeder;

class PartPurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartPurchase::factory()
            ->count(5)
            ->create();
    }
}
