<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->unique()->words(3, true),
            'start_date'=>fake()->dateTimeBetween('-1 year', 'now'),
            'end_date'=>fake()->dateTimeBetween('now', '+1 year'),
            'status'=>fake()->randomElement(['In Progress', 'Complete', 'Suspended']),
        ];
    }
}
