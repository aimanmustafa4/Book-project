<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
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
            'Book_name'=>$this ->faker->word,
            'Author'=>$this ->faker->name,
            'Book_review'=>$this ->faker->paragraph,
            'pages'=>$this ->faker->numberBetween(100-500),
            'price'=>$this ->faker->numberBetween(100-200),
        ];
    }
}
