<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "ahmad ihsan",
            'password' => Hash::make("password"),
            'email' =>'admin@gmail.com',
            'email_verified_at' => now(),
        ]);
    }
}
