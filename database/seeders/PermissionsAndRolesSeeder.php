<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'publish']);
        Permission::create(['name' => 'editAll']);
        Permission::create(['name' => 'deleteAll']);
        Permission::create(['name' => 'publishAll']);

        $common_permissions = ['edit', 'delete', 'publish'];

        $role_user = Role::create(['name' => 'user']);
        $role_corretor = Role::create(['name' => 'corretor']);
        $role_admin = Role::create(['name' => 'admin']);
        

        $role_user->syncPermissions($common_permissions);
        $role_corretor->syncPermissions($common_permissions);
        $role_admin->syncPermissions($common_permissions);
        $role_admin->givePermissionTo('editAll');
        $role_admin->givePermissionTo('deleteAll');
        $role_admin->givePermissionTo('publishAll');
    }
}
