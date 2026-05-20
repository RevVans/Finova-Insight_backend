<?php

namespace Database\Factories;

use App\Models\Saving;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Saving>
 */
class SavingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $target = fake()->randomFloat(2, 1000000, 50000000);

        return [
            'name' => fake()->words(2, true) . ' Fund',
            'target_amount' => $target,
            'current_amount' => fake()->randomFloat(2, 0, $target),
            'deadline_date' => fake()->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
        ];
    }
}
