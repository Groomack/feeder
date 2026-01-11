<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\AnimalCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => AnimalCategory::inRandomOrder()->first()->id,
            'img_path' => fake()->imageUrl(),
        ];
    }
}
