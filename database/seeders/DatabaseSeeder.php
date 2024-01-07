<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BankAccountPemilik;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CompanySeeder::class,
            BankSeeder::class,
            BankAccountPemilikSeeder::class,
            RolePermissionSeeder::class,
            UserSeeder::class,
            MemberSeeder::class,
            BankAccountSeeder::class,
            KaryawanSeeder::class,
            BonusSeeder::class,
        ]);
    }
}
