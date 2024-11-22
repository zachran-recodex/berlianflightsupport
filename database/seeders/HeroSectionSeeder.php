<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroSections = [
            [
                'title' => 'Complete Flight Support Solution',
                'subtitle' => 'Your Trusted companion - a companion who thinks, plans and organizes every step to get the job done',
                'image' => 'heroSections/service1.jpg',
            ],
            [
                'title' => 'Seamless Travel Management',
                'subtitle' => 'We ensure every journey is smooth and tailored to your needs, every time.',
                'image' => 'heroSections/service2.jpg',
            ],
            [
                'title' => 'Unmatched Aviation Expertise',
                'subtitle' => 'Bringing decades of aviation know-how to deliver impeccable results for our clients.',
                'image' => 'heroSections/service3.jpg',
            ],
        ];

        foreach ($heroSections as $heroSection) {
            HeroSection::create($heroSection);
        }
    }
}
