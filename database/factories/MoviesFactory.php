<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(10),
            'director' => fake()->name(),
            'production' => fake()->date(),
            'cover' => fake()->name(),
            'duration' => fake()->text(),
            'video' => fake()->name(),
            'genres_id' => \App\Models\Genres::factory(),
        ];
    }
}
