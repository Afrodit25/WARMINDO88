<?php

namespace Database\Seeders;

use App\Models\Bonus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bonus = [
            [
                'id'                => 1,
                'bonus_name'        => 'TANPA AMBIL BONUS DEPOSIT',
                'remarks_bonus'     => '',
            ],
            [
                'id'                => 2,
                'bonus_name'        => 'DEPOSIT 200K BONUS 20%',
                'remarks_bonus'     => '',
            ],
            [
                'id'                => 3,
                'bonus_name'        => 'DEPOSIT 500K BONUS 50%',
                'remarks_bonus'     => '',
            ],
            [
                'id'                => 4,
                'bonus_name'        => 'DEPOSIT 1JT BONUS 80%',
                'remarks_bonus'     => '',
            ],
            [
                'id'                => 5,
                'bonus_name'        => 'DEPOSIT 3JT BONUS 100%',
                'remarks_bonus'     => '',
            ],
            [
                'id'                => 6,
                'bonus_name'        => 'BONUS CASHBACK JIKA KALAH 87% MINGGUAN',
                'remarks_bonus'     => '',
            ],
        ];

        foreach ($bonus as $vals) {
            Bonus::create($vals);
        }
    }
}
