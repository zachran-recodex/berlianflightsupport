<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Ground Handling',
                'slug' => Str::slug('Ground Handling'),
                'description' => 'Availability 24/7 | Requests immediately addressed | Individual security check | Check-in within 15 minutes- HLP airport',
                'image' => 'services/service1.jpg',
                'status' => true,
            ],
            [
                'title' => 'Flight Planning',
                'slug' => Str::slug('Flight Planning'),
                'description' => 'Individual Flight Planning according to type of operation | Delivery flight planning | Special missions support',
                'image' => 'services/service2.jpg',
                'status' => true,
            ],
            [
                'title' => 'Permits',
                'slug' => Str::slug('Permits'),
                'description' => 'Permits to fly | Special permits | TCO permits',
                'image' => 'services/service3.jpg',
                'status' => true,
            ],
            [
                'title' => 'In-Flight Catering',
                'slug' => Str::slug('In-Flight Catering'),
                'description' => '24/7 Support assistance | All reserved Menu | Reliable | Quality | Exceptional service standards | Fair Pricing',
                'image' => 'services/service4.jpg',
                'status' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
