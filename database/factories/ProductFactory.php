<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'store_id' => Store::factory(),
            'category_id' => Category::factory(),
            'name'  =>  fake()->word,
            'slug'  =>  fake()->unique()->slug,
            'description'  =>   fake()->paragraph,
            'price'  =>     fake()->randomFloat(2, 10, 500),
            'stock'  =>     fake()->numberBetween(0, 100),
        ];
    }
}
