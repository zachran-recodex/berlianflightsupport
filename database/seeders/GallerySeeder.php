<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'image' => 'galleries/image1.jpg',
                'status' => true,
            ],
            [
                'image' => 'galleries/image2.jpg',
                'status' => false,
            ],
            [
                'image' => 'galleries/image3.jpg',
                'status' => true,
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
