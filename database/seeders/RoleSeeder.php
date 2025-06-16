<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $admin = Role::firstOrCreate(['name' => 'admin']);
    $researcher = Role::firstOrCreate(['name' => 'researcher']);

    $user = User::first(); // or create a new admin user
    if ($user) {
        $user->assignRole('admin');
    }
}
}





