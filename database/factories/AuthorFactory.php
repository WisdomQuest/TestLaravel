<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 10),
            'work_experience' => $this->faker->randomDigit(),
            'phone_id' =>  $this->faker->unique()->numberBetween(1,10),//$this->faker->unique()->randomElement(range(1,10)), //range — Создаёт массив, содержащий диапазон элементов
        ];
    }
}
