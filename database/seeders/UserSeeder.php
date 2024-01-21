<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Super Admin
        $super_admin = User::create([
            'id' => 1,
            'username' => 'super-admin',
            'name' => 'Super Admin',
            'email' => 'super-admin@warmindo88.tech',
            'password' => Hash::make('P@ssw0rd'),
        ]);
        $super_admin->assignRole('super-admin');

        //Admin
        $admin = User::create([
            'id' => 2,
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@warmindo88.tech',
            'password' => Hash::make('12345678'),
        ]);
        $admin->assignRole('admin');

        //Sales
        $sales = User::create([
            'id' => 3,
            'username' => 'sales',
            'name' => 'Sales',
            'email' => 'sales@warmindo88.tech',
            'password' => Hash::make('12345678'),
        ]);
        $sales->assignRole('sales');

        $sales = User::create([
            'id' => 5,
            'username' => 'verrel',
            'name' => 'Verrel',
            'email' => 'verrel@warmindo88.tech',
            'password' => Hash::make('12345678'),
        ]);
        $sales->assignRole('sales');

        $sales = User::create([
            'id' => 6,
            'username' => 'rizky',
            'name' => 'Rizky',
            'email' => 'rizky@warmindo88.tech',
            'password' => Hash::make('12345678'),
        ]);
        $sales->assignRole('sales');

        //Member
        $member = User::create([
            'id' => 4,
            'username' => 'member',
            'name' => 'Member',
            'email' => 'member@warmindo88.tech',
            'password' => Hash::make('12345678'),
        ]);
        $member->assignRole('member');


    }
}
