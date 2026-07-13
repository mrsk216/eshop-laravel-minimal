<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Role::updateOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        Role::updateOrCreate(['name' => 'manager', 'guard_name' => 'web']);
        Role::updateOrCreate(['name' => 'customer', 'guard_name' => 'web']);
    }
}
