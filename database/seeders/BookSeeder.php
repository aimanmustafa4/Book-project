<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->create([
            'Book_name'=> 'Alice in the wonderland',
            'Author'=> 'Shakespare',
            'Book_review'=>'gdfyawfsdgsfhjdvhs dhsdh',
            'pages'=>'244',
            'price'=>'780'
        ]);

        Book::factory()->create(
            [
                'Book_name' => 'Greta Bobby',
                'Author' => 'F. Scott Fitzgerald',
                'Book_review' => 'A classic novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream through the mysterious Jay Gatsby.',
                'Book_review' => 'This is the definitive "American Dream" novel. Fitzgerald’s prose is poetic and haunting, capturing the decadence of the 1920s. The brilliance of the book lies in Nick Carraway’s narration—he is both enchanted and repelled by Gatsby’s pursuit of the past. It’s a short read, but every sentence feels weighted with meaning about class and the impossibility of repeating history.',
                'pages'=> 386,
                'price' => 150,

            ]

        );
        Book::factory()->create([
            'Book_name' => "Rich dad and poor dad",
            'Author' => 'Alexander',
        ]);

        Book::factory()->count(15)->create();
    }
}
