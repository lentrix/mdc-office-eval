<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationItem>
 */
class EvaluationItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evaluation_id' => $this->faker->numberBetween(1, 12),
            'question_number' => $this->faker->numberBetween(0,9),
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
