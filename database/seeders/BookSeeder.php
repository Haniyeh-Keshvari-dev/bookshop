<?php

namespace Database\Seeders;

use App\Models\Author;
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
        $author=Author::all();
        foreach ($author as $authors) {
            Book::create([
                'title' => 'Once upon a time',
                'description' => 'A dystopian novel by George Orwell',
                'cover_image' => 'product-item1.jpg',
                'price' => 120000,
                'is_free' => false,
                'type' => 'physical',
                'stock' => 10,
                'download_link' => null,
                'author_id' => $authors->id,

            ]);

            Book::create([
                'title' => 'The lady beauty Scarlett',
                'description' => 'Fantasy book by J. K. Rowling',
                'cover_image' => 'product-item2.jpg',
                'price' => 150000,
                'is_free' => false,
                'type' => 'digital',
                'stock' => 100,
                'download_link' => 'harry_potter.pdf',
                'author_id' => $authors->id,
            ]);
            Book::create([
                'title' => 'Great travel at desert',
                'description' => 'Fantasy book by J. K. Rowling',
                'cover_image' => 'product-item3.jpg',
                'price' => 150000,
                'is_free' => false,
                'type' => 'digital',
                'stock' => 100,
                'download_link' => 'harry_potter.pdf',
                'author_id' => $authors->id,
            ]);
            Book::create([
                'title' => 'Simple way of piece life',
                'description' => 'Fantasy book by J. K. Rowling',
                'cover_image' => 'product-item4.jpg',
                'price' => 150000,
                'is_free' => false,
                'type' => 'digital',
                'stock' => 100,
                'download_link' => 'harry_potter.pdf',
                'author_id' => $authors->id,
            ]);
        }
    }
}
