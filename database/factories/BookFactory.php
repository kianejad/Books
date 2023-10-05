<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;
use function MongoDB\BSON\toJSON;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'price' => fake()->numberBetween(10000000, 10000000),
            'isbn' => fake()->unique()->randomNumber(9),
            'description' => fake()->text(150),
            'image_path' => [
                1,
                2,
                3,
                4,
            ],
        ];
    }
}
