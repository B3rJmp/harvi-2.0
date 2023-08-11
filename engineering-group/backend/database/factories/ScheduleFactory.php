<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id' => fake()->numberBetween(1,30),
            'job_status_id' => fake()->numberBetween(1,3),
            'job_id' => fake()->numberBetween(1,40),
            'date' => fake()->date(),
            'time' => fake()->time()
        ];
    }
}
