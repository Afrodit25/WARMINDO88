<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User
        Permission::create(['name'=>'tambah-user']);
        Permission::create(['name'=>'edit-user']);
        Permission::create(['name'=>'hapus-user']);
        Permission::create(['name'=>'lihat-user']);
        // Karyawan
        Permission::create(['name'=>'tambah-karyawan']);
        Permission::create(['name'=>'edit-karyawan']);
        Permission::create(['name'=>'hapus-karyawan']);
        Permission::create(['name'=>'lihat-karyawan']);
        // Member
        Permission::create(['name'=>'tambah-member']);
        Permission::create(['name'=>'edit-member']);
        Permission::create(['name'=>'hapus-member']);
        Permission::create(['name'=>'lihat-member']);
        // Bonus
        Permission::create(['name'=>'tambah-bonus']);
        Permission::create(['name'=>'edit-bonus']);
        Permission::create(['name'=>'hapus-bonus']);
        Permission::create(['name'=>'lihat-bonus']);
        // Deposit
        Permission::create(['name'=>'tambah-deposit']);
        Permission::create(['name'=>'edit-deposit']);
        Permission::create(['name'=>'hapus-deposit']);
        Permission::create(['name'=>'lihat-deposit']);
        // Withdraw
        Permission::create(['name'=>'tambah-withdraw']);
        Permission::create(['name'=>'edit-withdraw']);
        Permission::create(['name'=>'hapus-withdraw']);
        Permission::create(['name'=>'lihat-withdraw']);



        //Create Role
        Role::create(['name'=>'super-admin']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'member']);
        Role::create(['name'=>'sales']);



        //Beri Akses Role Super Admin ke Permission
        $roleSuperAdmin = Role::findByName('super-admin');
        //USER
        $roleSuperAdmin->givePermissionTo('tambah-user');
        $roleSuperAdmin->givePermissionTo('edit-user');
        $roleSuperAdmin->givePermissionTo('hapus-user');
        $roleSuperAdmin->givePermissionTo('lihat-user');
        // Karyawan
        $roleSuperAdmin->givePermissionTo('tambah-karyawan');
        $roleSuperAdmin->givePermissionTo('edit-karyawan');
        $roleSuperAdmin->givePermissionTo('hapus-karyawan');
        $roleSuperAdmin->givePermissionTo('lihat-karyawan');
        // MEMBER
        $roleSuperAdmin->givePermissionTo('tambah-member');
        $roleSuperAdmin->givePermissionTo('edit-member');
        $roleSuperAdmin->givePermissionTo('hapus-member');
        $roleSuperAdmin->givePermissionTo('lihat-member');
        // BONUS
        $roleSuperAdmin->givePermissionTo('tambah-bonus');
        $roleSuperAdmin->givePermissionTo('edit-bonus');
        $roleSuperAdmin->givePermissionTo('hapus-bonus');
        $roleSuperAdmin->givePermissionTo('lihat-bonus');
        // DEPOSIT
        $roleSuperAdmin->givePermissionTo('tambah-deposit');
        $roleSuperAdmin->givePermissionTo('edit-deposit');
        $roleSuperAdmin->givePermissionTo('hapus-deposit');
        $roleSuperAdmin->givePermissionTo('lihat-deposit');
        // WITHDRAW
        $roleSuperAdmin->givePermissionTo('tambah-withdraw');
        $roleSuperAdmin->givePermissionTo('edit-withdraw');
        $roleSuperAdmin->givePermissionTo('hapus-withdraw');
        $roleSuperAdmin->givePermissionTo('lihat-withdraw');


        //Beri Akses Role Admin ke Permission
        $roleAdmin = Role::findByName('admin');
        //USER
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');
        // Karyawan
        $roleAdmin->givePermissionTo('tambah-karyawan');
        $roleAdmin->givePermissionTo('edit-karyawan');
        $roleAdmin->givePermissionTo('hapus-karyawan');
        $roleAdmin->givePermissionTo('lihat-karyawan');
        // MEMBER
        $roleAdmin->givePermissionTo('tambah-member');
        $roleAdmin->givePermissionTo('edit-member');
        $roleAdmin->givePermissionTo('hapus-member');
        $roleAdmin->givePermissionTo('lihat-member');
        // BONUS
        $roleAdmin->givePermissionTo('tambah-bonus');
        $roleAdmin->givePermissionTo('edit-bonus');
        $roleAdmin->givePermissionTo('hapus-bonus');
        $roleAdmin->givePermissionTo('lihat-bonus');
        // DEPOSIT
        $roleAdmin->givePermissionTo('tambah-deposit');
        $roleAdmin->givePermissionTo('edit-deposit');
        $roleAdmin->givePermissionTo('hapus-deposit');
        $roleAdmin->givePermissionTo('lihat-deposit');
        // WITHDRAW
        $roleAdmin->givePermissionTo('tambah-withdraw');
        $roleAdmin->givePermissionTo('edit-withdraw');
        $roleAdmin->givePermissionTo('hapus-withdraw');
        $roleAdmin->givePermissionTo('lihat-withdraw');


        //Beri Akses Role Sales ke Permission
        $roleSales = Role::findByName('sales');
        // MEMBER
        $roleSales->givePermissionTo('tambah-member');
        $roleSales->givePermissionTo('edit-member');
        $roleSales->givePermissionTo('hapus-member');
        $roleSales->givePermissionTo('lihat-member');
        // BONUS
        $roleSales->givePermissionTo('tambah-bonus');
        $roleSales->givePermissionTo('edit-bonus');
        $roleSales->givePermissionTo('hapus-bonus');
        $roleSales->givePermissionTo('lihat-bonus');
        // DEPOSIT
        $roleSales->givePermissionTo('tambah-deposit');
        $roleSales->givePermissionTo('edit-deposit');
        $roleSales->givePermissionTo('hapus-deposit');
        $roleSales->givePermissionTo('lihat-deposit');
        // WITHDRAW
        $roleSales->givePermissionTo('tambah-withdraw');
        $roleSales->givePermissionTo('edit-withdraw');
        $roleSales->givePermissionTo('hapus-withdraw');
        $roleSales->givePermissionTo('lihat-withdraw');
    }
}
