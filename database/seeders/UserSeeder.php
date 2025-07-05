<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'customer User',
            'email' => 'user@gmail.com',
            'role' => 'customer',
        ]);

        User::factory()->create([
            'name' => 'vendor User',
            'email' => 'vendor@gmail.com',
            'role' => 'vendor',
        ]);
    }
}
