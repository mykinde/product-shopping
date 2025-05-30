<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5), // Assuming you have 5 users
            'category_id' =>  $this->faker->numberBetween(1, 2),
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->numberBetween(1000, 100000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'image' => 'https://i.imgur.com/50eJv7A.png', // Ensure this exists in public/storage/products
            //'image' => 'products/sample.jpg', // Ensure this exists in public/storage/products
        ];
    }
}
