<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@pos-system.com',
                'role' => 'Administrator',
                'created_at' => '2024-01-15'
            ],
            [
                'id' => 2,
                'name' => 'Manager Smith',
                'email' => 'manager.smith@pos-system.com',
                'role' => 'Manager',
                'created_at' => '2024-02-20'
            ],
            [
                'id' => 3,
                'name' => 'Cashier Johnson',
                'email' => 'cashier.johnson@pos-system.com',
                'role' => 'Cashier',
                'created_at' => '2024-03-10'
            ],
            [
                'id' => 4,
                'name' => 'Supervisor Williams',
                'email' => 'supervisor.williams@pos-system.com',
                'role' => 'Supervisor',
                'created_at' => '2024-04-05'
            ],
            [
                'id' => 5,
                'name' => 'Staff Brown',
                'email' => 'staff.brown@pos-system.com',
                'role' => 'Staff',
                'created_at' => '2024-05-12'
            ],
            [
                'id' => 6,
                'name' => 'Inventory Manager Davis',
                'email' => 'inventory.davis@pos-system.com',
                'role' => 'Inventory Manager',
                'created_at' => '2024-06-18'
            ]
        ];

        return view('users', compact('users'));
    }
}
