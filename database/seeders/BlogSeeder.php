<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'The Future of Aviation: Electric Planes',
                'slug' => Str::slug('The Future of Aviation: Electric Planes'),
                'description' => 'Exploring how electric planes are revolutionizing the aviation industry with reduced emissions and advanced technologies.',
                'author' => 'John Doe',
                'image' => 'blogs/electric-planes.jpg',
                'status' => true,
            ],
            [
                'title' => 'The Evolution of Commercial Airliners',
                'slug' => Str::slug('The Evolution of Commercial Airliners'),
                'description' => 'A journey through the history of commercial airliners, from the first passenger planes to modern jets.',
                'author' => 'Jane Smith',
                'image' => 'blogs/commercial-airliners.jpg',
                'status' => true,
            ],
            [
                'title' => 'Pilot Training: A Comprehensive Guide',
                'slug' => Str::slug('Pilot Training: A Comprehensive Guide'),
                'description' => 'Everything you need to know about becoming a pilot, from training schools to licensing requirements.',
                'author' => 'Michael Johnson',
                'image' => 'blogs/pilot-training.jpg',
                'status' => false,
            ],
            [
                'title' => 'Top 10 Airports with Stunning Views',
                'slug' => Str::slug('Top 10 Airports with Stunning Views'),
                'description' => 'Discover the most beautiful airport approaches in the world, offering breathtaking views for travelers.',
                'author' => 'Emily Davis',
                'image' => 'blogs/stunning-airports.jpg',
                'status' => true,
            ],
            [
                'title' => 'The Role of Drones in Modern Aviation',
                'slug' => Str::slug('The Role of Drones in Modern Aviation'),
                'description' => 'How drones are transforming industries like delivery, agriculture, and surveillance.',
                'author' => 'Chris Brown',
                'image' => 'blogs/drones-in-aviation.jpg',
                'status' => false,
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
