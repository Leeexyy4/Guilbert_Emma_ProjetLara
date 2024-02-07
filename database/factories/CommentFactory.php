<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $articles = Article::all();
        return [
            'article_id' => $articles->random()->id,
            'author' => fake()->name(),
            'content' => fake()->paragraph(),
            'created_at' => fake()->date(),
            'updated_at' => fake()->date()

        ];
    }
}
