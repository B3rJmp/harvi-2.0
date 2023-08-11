<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'service_id' => fake()->numberBetween(1,10),
            'property_id' => fake()->numberBetween(1,20),
            'price' => fake()->randomFloat(2,50,200),
            'max_minutes' => fake()->randomNumber(2,false),
            'min_minutes' => fake()->randomNumber(2,false)
        ];
    }
}
