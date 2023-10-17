<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => mt_rand(1, 10),
            'title' => $this->faker->text(mt_rand(5, 20)),
            'text' => $this->faker->text(mt_rand(5, 100)),
        ];
    }
}
