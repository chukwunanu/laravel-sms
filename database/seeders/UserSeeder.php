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
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@sms.com',
                'role' => 'SuperAdmin'
            ],
            [
                'name' => 'School Admin',
                'email' => 'schooladmin@sms.com',
                'role' => 'SchoolAdmin'
            ],
            [
                'name' => 'Teacher',
                'email' => 'teacher@sms.com',
                'role' => 'Teacher'
            ],
            [
                'name' => 'Student',
                'email' => 'student@sms.com',
                'role' => 'Student'
            ],
            [
                'name' => 'Parent',
                'email' => 'parent@sms.com',
                'role' => 'Parent'
            ],
            [
                'name' => 'Bursar',
                'email' => 'bursar@sms.com',
                'role' => 'Bursar'
            ]
        ];

        foreach ($users as $user) {
            Role::firstOrCreate(['name' => $user['role']]);
            
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ])->assignRole($user['role']);
        }
    }
}