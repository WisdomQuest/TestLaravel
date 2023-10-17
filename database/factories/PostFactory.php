<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'author'=> $this->faker->name(),
            'title'=> $this->faker->text(mt_rand(30,100)),
            'is_publish'=>$this->faker->boolean() //mt_rand(1,2) == 1
        ];
    }
}
