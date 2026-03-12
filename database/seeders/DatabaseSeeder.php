<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Ise comment hi rehne dein agar zaroorat nahi
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User seed karne ki zaroorat nahi hai agar login system nahi hai, lekin rehne dein to masla nahi.
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ✅ YEH LINE BOHOT ZAROORI HAI:
        $this->call(ProductSeeder::class);
    }
}