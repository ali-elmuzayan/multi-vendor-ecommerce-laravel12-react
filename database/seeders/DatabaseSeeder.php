<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Store;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(UserSeeder::class);


        User::factory(10)->create(['role' => 'vendor'])->each(function ($user) {
            $store = Store::factory()->create(['user_id' => $user->id]);
            Product::factory(5)->create(['store_id' => $store->id]);
        });

        User::factory(20)->create(['role' => 'customer']);
    }
}
