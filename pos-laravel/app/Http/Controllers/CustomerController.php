<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'John Smith',
                'email' => 'john.smith@example.com',
                'phone' => '555-0101',
                'address' => '123 Main St, New York, NY 10001'
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'phone' => '555-0102',
                'address' => '456 Oak Ave, Los Angeles, CA 90001'
            ],
            [
                'id' => 3,
                'name' => 'Robert Johnson',
                'email' => 'robert.johnson@example.com',
                'phone' => '555-0103',
                'address' => '789 Pine Rd, Chicago, IL 60601'
            ],
            [
                'id' => 4,
                'name' => 'Emily Williams',
                'email' => 'emily.williams@example.com',
                'phone' => '555-0104',
                'address' => '321 Elm St, Houston, TX 77001'
            ],
            [
                'id' => 5,
                'name' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'phone' => '555-0105',
                'address' => '654 Maple Dr, Phoenix, AZ 85001'
            ],
            [
                'id' => 6,
                'name' => 'Sarah Davis',
                'email' => 'sarah.davis@example.com',
                'phone' => '555-0106',
                'address' => '987 Cedar Ln, Philadelphia, PA 19101'
            ]
        ];

        return view('customers', compact('customers'));
    }
}
