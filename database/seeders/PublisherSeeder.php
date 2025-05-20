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
        Publisher::insert([
            ['name' => 'Bloomsbury'],
            ['name' => 'Penguin'],
            ['name' => 'HarperCollins'],
        ]);
    }
}
