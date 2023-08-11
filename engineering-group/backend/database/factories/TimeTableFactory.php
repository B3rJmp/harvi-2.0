<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeTable>
 */
class TimeTableFactory extends Factory
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
            'action_id' => fake()->numberBetween(1,2),
            'job_id' => fake()->numberBetween(1,40),
            'date' => fake()->date(),
            'time' => fake()->time()
        ];
    }
}
