<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tags' => $this->faker->words(10),
            'title' => $this->faker->sentence(30),
            'content' => $this->faker->paragraph(100),
            'image' => $this->faker->imageUrl,
            'outstanding' => $this->faker->boolean,
            'category_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
