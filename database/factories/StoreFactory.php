<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
          return [
        'user_id' => User::factory()->create(['role' => 'vendor'])->id,
        'name' => fake()->company,
        'slug' => fake()->unique()->slug,
        'description' => fake()->paragraph,
        'is_approved' => true,
    ];
    }
}
