<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawan = [
            [
                'id'                => 1,
                'username_kary'     => 'admin',
                'full_name_kary'    => 'Admin',
                'email_kary'        => 'admin@gmail.com',
                'jabatan_kary'      => 'OWNER',
                'tlp_kary'          => '-',
                'alamat_kary'       => '-',
                'kode_refferal'     => Str::random(5),
                'user_id'           => 2,
            ],
            [
                'id'                => 2,
                'username_kary'     => 'sales',
                'full_name_kary'    => 'Sales',
                'email_kary'        => 'sales@gmail.com',
                'jabatan_kary'      => 'SALES',
                'tlp_kary'          => '-',
                'alamat_kary'       => '-',
                'kode_refferal'     => Str::random(5),
                'user_id'           => 3,
            ],
        ];

        foreach ($karyawan as $val) {
            Karyawan::create($val);
        }
    }
}
