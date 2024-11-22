<?php

namespace Database\Seeders;

use App\Models\PageSetup;
use Illuminate\Database\Seeder;

class PageSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'meta_title' => 'Berlian Ground Support | Home | Professional Ground Handling Services',
                'meta_description' => 'Berlian Ground Support is a trusted provider of professional ground handling services, committed to delivering excellence for commercial, charter, and cargo flights.',
                'meta_keywords' => 'Ground Handling Indonesia, Airport Handling Services, Berlian Ground Support, Aircraft Services, Passenger Handling, Cargo Handling, Ramp Handling, Aviation Logistics, Flight Operations',
            ],
            [
                'title' => 'About Us',
                'slug' => 'about',
                'meta_title' => 'Berlian Ground Support | About Us | Ground Handling Experts',
                'meta_description' => 'At Berlian Ground Support, we offer high-quality ground handling services to ensure safe and efficient flight operations across airports in Indonesia.',
                'meta_keywords' => 'Ground Handling, Airport Services, Berlian Ground Support, Aviation Solutions, Aircraft Ground Services, Ramp Operations, Cargo Services, Passenger Assistance',
            ],
            [
                'title' => 'Services',
                'slug' => 'service',
                'meta_title' => 'Berlian Ground Support | Services | Comprehensive Ground Handling',
                'meta_description' => 'Our ground handling services include passenger handling, ramp handling, cargo operations, and aircraft maintenance support, ensuring seamless airport operations.',
                'meta_keywords' => 'Ground Handling Services, Passenger Handling, Ramp Handling, Cargo Operations, Aviation Logistics, Aircraft Support, Berlian Ground Support',
            ],
            [
                'title' => 'Blog',
                'slug' => 'blog',
                'meta_title' => 'Berlian Ground Support | News & Insights | Aviation Industry',
                'meta_description' => 'Explore our blog for the latest updates, insights, and industry news on aviation and ground handling services.',
                'meta_keywords' => 'Aviation News, Ground Handling Insights, Airline Operations, Industry Updates, Berlian Ground Support, Aviation Trends, Flight Services',
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact',
                'meta_title' => 'Berlian Ground Support | Contact Us | Get in Touch',
                'meta_description' => 'Contact Berlian Ground Support for expert ground handling services. We are here to support your aviation needs efficiently and professionally.',
                'meta_keywords' => 'Contact Berlian Ground Support, Aviation Services Inquiry, Ground Handling Support, Airport Services Assistance, Get in Touch, Client Support',
            ],
            [
                'title' => 'Gallery',
                'slug' => 'gallery',
                'meta_title' => 'Berlian Ground Support | Gallery | Our Operations',
                'meta_description' => 'View our gallery showcasing Berlian Ground Support’s ground handling operations and team in action at airports across Indonesia.',
                'meta_keywords' => 'Ground Handling Gallery, Airport Operations Photos, Berlian Ground Support Team, Aviation Services Visuals, Ramp Operations, Aircraft Handling',
            ],
            [
                'title' => 'Request A Quote',
                'slug' => 'quote',
                'meta_title' => 'Berlian Ground Support | Request a Quote | Tailored Solutions',
                'meta_description' => 'Request a customized quote for our ground handling services, tailored to meet your specific operational requirements and aviation needs.',
                'meta_keywords' => 'Request a Quote, Ground Handling Pricing, Custom Aviation Solutions, Tailored Services, Berlian Ground Support, Get a Quote',
            ],
        ];

        foreach ($pages as $page) {
            PageSetup::updateOrCreate(['slug' => $page['slug']], $page);
        }
    }
}
