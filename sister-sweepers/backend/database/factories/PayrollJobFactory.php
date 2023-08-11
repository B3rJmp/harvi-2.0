<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PayrollJob>
 */
class PayrollJobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payroll_id' => fake()->numberBetween(1,10),
            'time_table_id' => fake()->numberBetween(1,100),
            'job_id' => fake()->numberBetween(1,40)
        ];
    }
}
