<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Casts\Json;
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
            'title' => fake()->title(),
            'author' => fake()->name(),
            'price' => fake()->numberBetween(10000000, 10000000),
            'isbn' => fake()->unique()->randomNumber(9),
            'description' => fake()->text(150),
            'gallery' => Json::encode([
                    fake()->imageUrl(640, 480, 'books', true, 'Faker', true),
                    fake()->imageUrl(640, 480, 'books', true, 'Faker', true),
                    fake()->imageUrl(640, 480, 'books', true, 'Faker', true),
                    fake()->imageUrl(640, 480, 'books', true, 'Faker', true),
            ])
        ];
    }
}
