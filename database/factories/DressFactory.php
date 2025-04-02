<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dress>
 */
class DressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2), // Nombre aleatorio
            'slug' => $this->faker->sentence(2), // Slug basado en el nombre
            'description' => $this->faker->paragraph(5), // Descripción larga
            'short_description' => $this->faker->sentence(), // Descripción corta
            'image' => 'https://picsum.photos/seed/' . $this->faker->unique()->word . '/991/1234/',
            'price' => $this->faker->randomFloat(2, 100, 500), // Precio aleatorio entre 100 y 500
            'size' => $this->faker->randomElement(['10 ft', '12 ft', '15 ft']), // Tamaño aleatorio
        ];
    }
}
