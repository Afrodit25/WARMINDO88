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
            'email' => 'super-admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $super_admin->assignRole('super-admin');

        //Admin
        $admin = User::create([
            'id' => 2,
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $admin->assignRole('admin');

        //Sales
        $sales = User::create([
            'id' => 3,
            'username' => 'sales',
            'name' => 'Sales',
            'email' => 'sales@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $sales->assignRole('sales');

        //Member
        $member = User::create([
            'id' => 4,
            'username' => 'member',
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $member->assignRole('member');


    }
}
