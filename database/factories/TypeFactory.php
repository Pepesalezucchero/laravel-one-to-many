<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_type'=> fake()->unique()->randomElement(['Software', 'Hardware', 'Research']),
            'description' => fake()->sentence,
            'complexity' => fake()->randomElement(['Simple', 'Medium', 'Complex']),
        ];
    }
}
