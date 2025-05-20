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
        Book::create([
            'title' => '1984',
            'description' => 'A dystopian novel by George Orwell',
            'cover_image' => '1984.jpg',
            'price' => 120000,
            'is_free' => false,
            'type' => 'physical',
            'stock' => 10,
            'download_link' => null,

        ]);

        Book::create([
            'title' => 'Harry Potter',
            'description' => 'Fantasy book by J. K. Rowling',
            'cover_image' => 'harry_potter.jpg',
            'price' => 150000,
            'is_free' => false,
            'type' => 'digital',
            'stock' => 100,
            'download_link' => 'harry_potter.pdf',
        ]);
    }
}
