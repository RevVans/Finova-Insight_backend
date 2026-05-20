<?php

namespace Database\Factories;

use App\Models\LiteracyArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LiteracyArticle>
 */
class LiteracyArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'content' => fake()->paragraphs(4, true), 
            // Give it a random date from the last year!
            'date_published' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
        ];
    }
}
