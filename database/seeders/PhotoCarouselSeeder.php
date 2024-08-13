<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PhotoCarousel;

class PhotoCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'image' => 'uploads/photocarousel/photo1.jpeg'
            ],
            [
                'image' => 'uploads/photocarousel/photo2.jpeg'
            ],
            [
                'image' => 'uploads/photocarousel/photo3.jpeg'
            ],
        ];

        foreach ($images as $image) {
            PhotoCarousel::create($image);
        }
    }
}
