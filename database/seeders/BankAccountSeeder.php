<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankAccount = [
            [
                'id'                    => 1,
                'nama_rekening'         => 'BANK100',
                'no_rekening'           => '123123123123',
                'type_bank_accounts'    => 'Member',
                'remarks_bank_accounts' => '-',
                'bank_id'               => 1,
                'member_id'             => 1,
            ],
        ];

        foreach ($bankAccount as $banks) {
            BankAccount::create($banks);
        }
    }
}
