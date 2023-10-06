<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'Teamleader']);
        $role1 = Role::create(['name' => 'Editor']);
        $role2 = Role::create(['name' => 'Viewer']);
        
        
        Permission::create(['name' => 'Teamleader'])->assignRole($role);
        Permission::create(['name' => 'Editor'])->assignRole($role1);
        Permission::create(['name' => 'Viewer'])->assignRole($role2);
    }
}
