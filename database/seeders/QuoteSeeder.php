<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author1 = Author::firstOrCreate(['name' => 'Dr. Seuss']);
        $author2 = Author::firstOrCreate(['name' => 'Albert Einstein']);
        $author3 = Author::firstOrCreate(['name' => 'George Orwell']);

        Quote::create([
            'quote' => 'The more that you read, the more things you will know. The more that you learn, the more places you’ll go.',
            'author_id' => $author1->id,
        ]);

        Quote::create([
            'quote' => 'Imagination is more important than knowledge.',
            'author_id' => $author2->id,
        ]);

        Quote::create([
            'quote' => 'Sometimes the questions are complicated and the answers are simple.',
            'author_id' => $author1->id,
        ]);
        Quote::create([
            'quote' => 'Sometimes the questions are complicated and the answers are simple.',
            'author_id' => $author3->id,
        ]);
    }
}
