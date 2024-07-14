<?php

namespace Database\Seeders;

use App\Models\Prodecure;
use Illuminate\Database\Seeder;

class ProdecureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodecure::factory()
            ->count(5)
            ->create();
    }
}
