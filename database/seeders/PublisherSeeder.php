<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Tests\Laravel\App;

use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publisher::create([
            'name' => 'Library',
            'logo' => 'item3.png',
            'website_url' => 'https://openlibrary.org/',
        ]);

        Publisher::create([
            'name' => 'bookdoor',
            'logo' => 'item4.png',
            'website_url' => 'https://www.thebookdoor.com/',
        ]);
        Publisher::create([
            'name' => 'bookstore',
            'logo' => 'item5.png',
            'website_url' => 'https://www.bookstores.com/',
        ]);
    }
}
