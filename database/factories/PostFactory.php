<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Normalizer\SlugNormalizer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(5),
            'slug' => $title,
            'content' => $this->faker->paragraph(3), // Contenido aleatorio (string)
            'excerpt' => $this->faker->sentence(10), // Resumen aleatorio (string)
            'image' => 'https://picsum.photos/seed/' . $this->faker->unique()->word . '/1044/1106/',
            'author_id' => \App\Models\Authors::inRandomOrder()->first()->id, // Asigna un autor aleatorio
        ];
    }
}
