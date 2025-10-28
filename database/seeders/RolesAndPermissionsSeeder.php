<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     // Create roles
        $SuperAdminRole = Role::create(['name' => 'SuperAdmin']);
        $SchoolAdminRole = Role::create(['name' => 'SchoolAdmin']);
        $TeacherRole = Role::create(['name' => 'Teacher']);
        $StudentRole = Role::create(['name' => 'Student']);
        $ParentRole = Role::create(['name' => 'Parent']);
        $BursarRole = Role::create(['name' => 'Bursar']);
    }
}
