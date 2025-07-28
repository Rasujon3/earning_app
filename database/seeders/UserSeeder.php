<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Default admin user
        User::create([
            'uid' => 'USR1001',
            'name' => 'Admin User',
            'role' => 'admin',
            'username' => 'admin',
            'phone' => '01712345678',
            'withdraw_acc_number' => '1234567890',
            'password' => '123456',
            'withdraw_password' => '123456',
            'amount' => '1000',
            'status' => 'Active',
            'remember_token' => Str::random(10),
        ]);

        // Another sample user
        User::create([
            'uid' => 'USR1002',
            'name' => 'Test User',
            'role' => 'user',
            'username' => 'test_user',
            'phone' => '01812345678',
            'withdraw_acc_number' => '9876543210',
            'password' => '123456',
            'withdraw_password' => '123456',
            'amount' => '10000',
            'status' => 'Active',
            'remember_token' => Str::random(10),
        ]);
    }
}
