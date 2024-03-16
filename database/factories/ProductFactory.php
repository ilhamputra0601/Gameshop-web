<?php

namespace Database\Factories;

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
            'category_id' => $this->faker->randomElement([1, 2, 3]),
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomNumber(4),
            'body' => $this->faker->paragraph,
            'description' => $this->faker->paragraph,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
