<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = Order::STATUS_VALUES;
        return [
            'user_id' => User::factory()->create(['role' => 'customer'])->id,
            'total' => fake()->randomFloat(2, 10, 100),
            'status' => array_rand($status),

        ];
    }
}
