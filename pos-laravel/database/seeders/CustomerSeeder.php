<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            ['full_name' => 'John Smith', 'email' => 'john.smith@example.com', 'phone' => '555-0101'],
            ['full_name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'phone' => '555-0102'],
            ['full_name' => 'Robert Johnson', 'email' => 'robert.johnson@example.com', 'phone' => '555-0103'],
            ['full_name' => 'Emily Williams', 'email' => 'emily.williams@example.com', 'phone' => '555-0104'],
            ['full_name' => 'Michael Brown', 'email' => 'michael.brown@example.com', 'phone' => '555-0105'],
            ['full_name' => 'Sarah Davis', 'email' => 'sarah.davis@example.com', 'phone' => '555-0106'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
