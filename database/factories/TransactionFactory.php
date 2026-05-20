<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'type' => fake()->randomElement(['income', 'expense']),
        'amount' => fake()->randomFloat(2, 10000, 5000000), // Random Rupiah amounts
        'date' => fake()->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
        'desc' => fake()->sentence(),
        ];
    }
}
