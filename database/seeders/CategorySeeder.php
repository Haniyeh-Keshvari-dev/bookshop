<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $literature = Category::create(['name' => 'ادبیات']);

        Category::insert([
            ['name' => 'عاشقانه', 'parent_id' => $literature->id],
            ['name' => 'کلاسیک', 'parent_id' => $literature->id],
        ]);
    }
}
