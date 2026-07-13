<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //Admin
        $admin = User::updateOrCreate(
            ['email' => 'admin@eshop.com'],
            [
                'name' => 'Shekh Md Mohsin',
                'password' => Hash::make('admin1234'),
                'phone' => '01889704201',
                'address' => 'Manikganj, Bangladesh',
                'role' => 'admin',
                'email_verified_at' => now()
            ]
        );
        $admin->assignRole('admin');

        //Manager
        $manager = User::updateOrCreate(
            ['email' => 'manager@eshop.com'],
            [
                'name' => 'Manager 1',
                'password' => Hash::make('manager1234'),
                'phone' => '01889525201',
                'address' => 'Manikganj, Bangladesh',
                'role' => 'manager',
                'email_verified_at' => now()
            ]
        );
        $manager->assignRole('manager');

        //Customer
        $customers = [
            ['name' => 'John Smith', 'email' => 'john@example.com'],
            ['name' => 'Sarah Johnson', 'email' => 'sarah@example.com'],
            ['name' => 'Michael Brown', 'email' => 'michael@example.com'],
            ['name' => 'Emily Davis', 'email' => 'emily@example.com'],
            ['name' => 'David Wilson', 'email' => 'david@example.com'],
            ['name' => 'Jessica Taylor', 'email' => 'jessica@example.com'],
            ['name' => 'James Anderson', 'email' => 'james@example.com'],
            ['name' => 'Lisa Thomas', 'email' => 'lisa@example.com'],
            ['name' => 'Robert Jackson', 'email' => 'robert@example.com'],
            ['name' => 'Maria Garcia', 'email' => 'maria@example.com'],
        ];

        foreach ($customers as $key => $value) {
            $customer = User::updateOrCreate(
                ['email' => $value['email']],
                [
                    'name' => $value['name'],
                    'password' => Hash::make('12345678'),
                    'role' => 'customer',
                    'email_verified_at' => now()
                ]
            );
            $customer->assignRole('customer');
        }
    }
}
