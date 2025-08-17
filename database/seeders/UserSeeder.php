<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Abubakar baig',
                'email' => 'Abubakar192005@gmail.com',
                'password' => Hash::make('Abubakar123')
            ],
            [
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'password' => Hash::make('admin123')
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('manager123')
            ]
        ]);
    }

}
