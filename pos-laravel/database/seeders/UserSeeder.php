<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Admin User', 'email' => 'admin@pos-system.com', 'password' => 'admin123', 'userlevel' => 'admin'],
            ['username' => 'manager.smith', 'full_name' => 'Manager Smith', 'email' => 'manager.smith@pos-system.com', 'password' => 'password123', 'userlevel' => 'manager'],
            ['username' => 'cashier.johnson', 'full_name' => 'Cashier Johnson', 'email' => 'cashier.johnson@pos-system.com', 'password' => 'password123', 'userlevel' => 'cashier'],
            ['username' => 'supervisor.williams', 'full_name' => 'Supervisor Williams', 'email' => 'supervisor.williams@pos-system.com', 'password' => 'password123', 'userlevel' => 'supervisor'],
            ['username' => 'staff.brown', 'full_name' => 'Staff Brown', 'email' => 'staff.brown@pos-system.com', 'password' => 'password123', 'userlevel' => 'staff'],
            ['username' => 'inventory.davis', 'full_name' => 'Inventory Manager Davis', 'email' => 'inventory.davis@pos-system.com', 'password' => 'password123', 'userlevel' => 'inventory'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
