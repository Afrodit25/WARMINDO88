<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $member = [
            [
                'id'                => 1,
                'username_member'   => 'member',
                'full_name_member'  => 'member',
                'email_member'      => 'member@gmail.com',
                'tlp_member'        => '-',
                'website_ref'       => '-',
                'saldo_deposit'     => 0,
                'remarks_member'    => '-',
                'user_id'           => 4,
            ],
        ];

        foreach ($member as $val) {
            Member::create($val);
        }
    }
}
