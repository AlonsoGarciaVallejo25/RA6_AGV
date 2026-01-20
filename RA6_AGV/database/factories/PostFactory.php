<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraph(5),
            'excerpt' => $this->faker->sentence(10),
            'views' => $this->faker->numberBetween(0, 1000),
            'category' => $this->faker->randomElement(['Tech', 'News', 'Sports']),
            'published_at' => now(),
            'is_published' => true,
        ];
    }
}
