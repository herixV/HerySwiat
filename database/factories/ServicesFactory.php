<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->unique()->sentence(3),
            'slug' => $name,
            'description' => $this->faker->paragraph(20),
            'short_description' => $this->faker->paragraph(10),
            'image' => 'https://picsum.photos/seed/' . $this->faker->unique()->word . '/2150/1267/',
            'icon' => Null,
            'is_featured' => $this->faker->boolean(),

        ];
    }
}
