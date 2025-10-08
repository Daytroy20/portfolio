<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Barber Website',
                'slug' => 'barber-website',
                'description' => 'A responsive barber app built with HTML, CSS, and JavaScript.',
                'image' => 'barber.png',
                'github' => 'https://github.com/yourusername/barber-website',
                'demo' => '#',
                'tags' => json_encode(['HTML', 'CSS', 'JavaScript']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Portfolio Template',
                'slug' => 'portfolio-template',
                'description' => 'A clean and modern portfolio layout for developers.',
                'image' => 'portfolio.png',
                'github' => 'https://github.com/yourusername/portfolio-template',
                'demo' => '#',
                'tags' => json_encode(['HTML', 'CSS', 'JavaScript']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Smart Home System',
                'slug' => 'smart-home-system',
                'description' => 'IoT system for smart home automation and monitoring.',
                'image' => 'smarthome.png',
                'github' => 'https://github.com/yourusername/smart-home-system',
                'demo' => '#',
                'tags' => json_encode(['HTML', 'CSS', 'JavaScript', 'Node.js']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
