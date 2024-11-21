<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar permission yang akan dibuat
        $permissions = [
            'manage abouts',
            'manage blogs',
            'manage contacts',
            'manage heroSections',
            'manage pageSetups',
            'manage services',
            'manage settings',
        ];

        // Membuat permission jika belum ada
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
            ]);
        }

        // Membuat role 'admin'
        $superAdminRole = Role::firstOrCreate([
            'name' => 'admin',
        ]);

        // Membuat user Admin jika belum ada
        $admin = User::firstOrCreate(
            ['email' => 'admin@berlianflightsupport.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
            ]
        );

        // Assign role 'admin' ke Admin
        $admin->assignRole($superAdminRole);
    }
}
