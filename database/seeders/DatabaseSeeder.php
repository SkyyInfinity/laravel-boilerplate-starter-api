<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create([
            'username' => 'admin316',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);

        \App\Models\User::factory(10)->create();
    }
}