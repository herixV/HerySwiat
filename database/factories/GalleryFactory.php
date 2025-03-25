<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => \App\Models\Category::all()->random()->id,
            'title' => $this->faker->sentence,
            'image' => 'https://picsum.photos/seed/' . $this->faker->unique()->word . '/1044/1106/',
        ];
    }
}
