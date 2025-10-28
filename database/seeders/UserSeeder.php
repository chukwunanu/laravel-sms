<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'SuperAdmin', 'guard_name' => 'sms'],
            ['name' => 'SchoolAdmin', 'guard_name' => 'sms'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role['name'], 'guard_name' => $role['guard_name']]);
        }

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@sms.com',
                'role' => 'SuperAdmin',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Admin',
                'email' => 'SchoolAdmin@sms.com',
                'role' => 'SchoolAdmin',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $userData) {
          $user =  User::updateOrCreate(['email' => $userData['email']], $userData);
            $user->assignRole($userData['role']);

        }
    }
}
