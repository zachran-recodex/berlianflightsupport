<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Berlian Ground Support',
            'image' => 'about/lol.png',
            'description' => 'We are specialized in providing top-tier ground handling services and comprehensive flight support for General Aviation, Business Aviation, and Executive traffic. Our commitment to delivering efficient, professional, and unparalleled service sets us apart in the industry. Our multinational team brings a wealth of experience from leading global aviation and airline companies. With expertise honed through diverse projects and senior management roles, we are dedicated to ensuring your aviation needs are met with the highest standards of excellence and reliability.',
            'vision' => 'Committed to being a leader in business aviation services by providing our customers and employees uncompromised safety, exceptional quality and unparalleled customer service.',
            'mission' => 'We provide our comprehensive suite of Ground Handling Services, Permit & Flight Support, Supporting Heliport / Helideck Facilities, In-Flight Catering and Aircraft Charter Solutions.',
            'director_name' => 'Tri Eko Fambudi',
        ]);
    }
}
