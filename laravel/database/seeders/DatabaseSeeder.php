<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "usertype" => "ADMIN",
            "username" => "Tadiwa Tasara",
            "email" => "admin@localhost.com",
            "password" => Hash::make("12345678")
        ]);
    }
}
