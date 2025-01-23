<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->realText(),
            'created_at' => 1,
            'updated_at' => 1,
            'due_date' => fake()->dateTimeBetween('now', '+1 year'),
            'image_path' => fake()->imageUrl(),
            'status' => fake()->randomElement(['pending', 'in_progress', 'completed']),
        ];
    }
}
