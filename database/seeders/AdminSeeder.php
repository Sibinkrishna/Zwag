<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::updateOrCreate(
            ['email' => 'admin@example.com'], // unique column
            [
                'name' => 'Super Admin',
                'email' => 'admin@zwag.com',
                'password' => Hash::make('Zwag@2025#$'), // change to strong password
            ]
        );
        $user->assignRole('Super Admin');
    }
}
