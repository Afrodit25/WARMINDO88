<?php

namespace Database\Seeders;

use App\Models\BankAccountPemilik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankAccountPemilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankPemilik = [
            [
                'nama_rekening_bank_account_pemilik'    => 'FJY',
                'no_rekening_bank_account_pemilik'      => '111111111',
                'min_depo'                              => '20',
                'max_depo'                              => '1000',
                'type_bank_account_pemilik'             => 'OWNER',
                'remarks_bank_account_pemilik'          => '-',
                'bank_id'                               => '1',
            ],
            [
                'nama_rekening_bank_account_pemilik'    => 'PRD',
                'no_rekening_bank_account_pemilik'      => '2222222222',
                'min_depo'                              => '20',
                'max_depo'                              => '1000',
                'type_bank_account_pemilik'             => 'OWNER',
                'remarks_bank_account_pemilik'          => '-',
                'bank_id'                               => '4',
            ],
            [
                'nama_rekening_bank_account_pemilik'    => 'BANK1',
                'no_rekening_bank_account_pemilik'      => '333333333333',
                'min_depo'                              => '20',
                'max_depo'                              => '1000',
                'type_bank_account_pemilik'             => 'OWNER',
                'remarks_bank_account_pemilik'          => '-',
                'bank_id'                               => '5',
            ],
            [
                'nama_rekening_bank_account_pemilik'    => 'BANK2',
                'no_rekening_bank_account_pemilik'      => '4444444444444',
                'min_depo'                              => '20',
                'max_depo'                              => '1000',
                'type_bank_account_pemilik'             => 'OWNER',
                'remarks_bank_account_pemilik'          => '-',
                'bank_id'                               => '6',
            ],
        ];

        foreach ($bankPemilik as $banks) {
            BankAccountPemilik::create($banks);
        }
    }
}
