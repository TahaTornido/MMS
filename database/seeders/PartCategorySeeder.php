<?php

namespace Database\Seeders;

use App\Models\PartCategory;
use Illuminate\Database\Seeder;

class PartCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartCategory::factory()
            ->count(5)
            ->create();
    }
}
