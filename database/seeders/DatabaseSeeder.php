<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(CustomerSeeder::class);
        $this->call(CustomerServiceSeeder::class);
        $this->call(DeliverableSeeder::class);
        $this->call(DiagnosisSeeder::class);
        $this->call(MaintenanceSeeder::class);
        $this->call(MaintenanceRequestSeeder::class);
        $this->call(MalfunctionSeeder::class);
        $this->call(MalfunctionClassSeeder::class);
        $this->call(PartCategorySeeder::class);
        $this->call(PartOptionSeeder::class);
        $this->call(PartPurchaseSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProdecureSeeder::class);
        $this->call(ReceiptSeeder::class);
        $this->call(ReplacementPartSeeder::class);
        $this->call(RequiredPartSeeder::class);
        $this->call(TechnicianSeeder::class);
        $this->call(UserSeeder::class);
    }
}
