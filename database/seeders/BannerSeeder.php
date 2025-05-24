<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'Life of the Wild',
            'description' => 'متن تستی برای اسلاید اول',
            'image' => 'main-banner1.jpg',
            'link' => '#',
        ]);

        Banner::create([
            'title' => 'Birds gonna be Happy',
            'description' => 'متن تستی برای اسلاید دوم',
            'image' => 'main-banner2.jpg',
            'link' => '#',
        ]);
    }
}
