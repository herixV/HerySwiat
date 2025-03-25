<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(8),
            // 'image' => 'https://picsum.photos/seed/picsum/2150/1267/',
            'image' => 'https://picsum.photos/seed/' . $this->faker->unique()->word . '/2150/1267/',
        ];
    }
}
