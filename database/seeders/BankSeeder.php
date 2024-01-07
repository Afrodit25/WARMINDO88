<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bank = [
            [
                'id'        => 1,
                'bank_type' => 'E-WALLET',
                'bank_name' => 'DANA',
            ],
            [
                'id'        => 2,
                'bank_type' => 'E-WALLET',
                'bank_name' => 'OVO',
            ],
            [
                'id'        => 3,
                'bank_type' => 'E-WALLET',
                'bank_name' => 'GOPAY',
            ],
            [
                'id'        => 4,
                'bank_type' => 'E-WALLET',
                'bank_name' => 'SHOPEPAY',
            ],
            [
                'id'        => 5,
                'bank_type' => 'BANK',
                'bank_name' => 'BCA',
            ],
            [
                'id'        => 6,
                'bank_type' => 'BANK',
                'bank_name' => 'BRI',
            ],
            [
                'id'        => 7,
                'bank_type' => 'BANK',
                'bank_name' => 'MANDIRI',
            ],
            [
                'id'        => 8,
                'bank_type' => 'BANK',
                'bank_name' => 'PERMATA',
            ],
            [
                'id'        => 9,
                'bank_type' => 'BANK',
                'bank_name' => 'MEGA',
            ],
        ];

        foreach ($bank as $banks) {
            Bank::create($banks);
        }
    }
}
