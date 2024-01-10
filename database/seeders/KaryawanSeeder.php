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
                'email_kary'        => 'admin@warmindo88.tech',
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
                'email_kary'        => 'sales@warmindo88.tech',
                'jabatan_kary'      => 'SALES',
                'tlp_kary'          => '-',
                'alamat_kary'       => '-',
                'kode_refferal'     => Str::random(5),
                'user_id'           => 3,
            ],
            [
                'id'                => 3,
                'username_kary'     => 'verrel',
                'full_name_kary'    => 'Verrel',
                'email_kary'        => 'verrel@warmindo88.tech',
                'jabatan_kary'      => 'SALES',
                'tlp_kary'          => '-',
                'alamat_kary'       => '-',
                'kode_refferal'     => Str::random(5),
                'user_id'           => 5,
            ],
            [
                'id'                => 4,
                'username_kary'     => 'rizky',
                'full_name_kary'    => 'Rizky',
                'email_kary'        => 'rizky@warmindo88.tech',
                'jabatan_kary'      => 'SALES',
                'tlp_kary'          => '-',
                'alamat_kary'       => '-',
                'kode_refferal'     => Str::random(5),
                'user_id'           => 6,
            ],
        ];

        foreach ($karyawan as $val) {
            Karyawan::create($val);
        }
    }
}
