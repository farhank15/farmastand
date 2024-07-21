<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // Pastikan Anda mengimpor model Role yang benar

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner',
        ]);

        $buyerRole = Role::create([
            'name' => 'buyer',
        ]);

        $user = User::create([
            'name' => 'dian el',
            'email' => 'dian@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole($ownerRole);
    }
}
