<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $user = User::firstOrCreate(
            ['email' => 'john@mail.com'],
            [
                'name' => 'John Doe',
                'password' => 'John_123',
                'email_verified_at' => now(),
            ]
        );

        // Permissions
        $permissions = [
            'view users',
            'create users',
            'edit users',
            'delete users',

            'view role/permissions',
            'create role/permissions',
            'edit role/permissions',
            'delete role/permissions',
            
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $therapist = Role::firstOrCreate(['name' => 'therapist']);
        $customer = Role::firstOrCreate(['name' => 'customer']);

        // Assign permissions
        $admin->givePermissionTo(Permission::all());

        // Assign role to user
        $user->assignRole($admin);
    }
}
