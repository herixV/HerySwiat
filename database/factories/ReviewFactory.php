<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'review' => $this->faker->paragraph(3),
            // 'image' => $this->faker->imageUrl(100, 100, 'people'),
            'image' => 'https://picsum.photos/seed/' . $this->faker->unique()->word . '/100/100/',
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
