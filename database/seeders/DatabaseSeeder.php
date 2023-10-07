<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bidang;
use App\Models\Fitur;
use App\Models\Plan;
use App\Models\PlansFitur;
use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $bidangsData = [
            [
                'nama_bidang' => 'HTML 5',
                'gambar' => 'html'
            ],
            [
                'nama_bidang' => 'Docker',
                'gambar' => 'docker'
            ],
            [
                'nama_bidang' => 'Vue.js',
                'gambar' => 'vuejs'
            ],
            [
                'nama_bidang' => 'CSS 3',
                'gambar' => 'css'
            ],
            [
                'nama_bidang' => 'Javascript',
                'gambar' => 'javascript'
            ],
            [
                'nama_bidang' => 'Laravel',
                'gambar' => 'laravel'
            ],
            [
                'nama_bidang' => 'Next JS',
                'gambar' => 'nextjs'
            ],
            [
                'nama_bidang' => 'Tailwind CSS',
                'gambar' => 'tailwind'
            ],
            [
                'nama_bidang' => 'Go Language',
                'gambar' => 'golang'
            ],
            [
                'nama_bidang' => 'My SQL',
                'gambar' => 'mysql'
            ],
            [
                'nama_bidang' => 'Node JS',
                'gambar' => 'nodejs'
            ],
            [
                'nama_bidang' => 'Python',
                'gambar' => 'python'
            ],
            [
                'nama_bidang' => 'PostgreSQL',
                'gambar' => 'postgresql'
            ],
            [
                'nama_bidang' => 'Swift',
                'gambar' => 'swift'
            ],
            [
                'nama_bidang' => 'PHP',
                'gambar' => 'php'
            ],
            [
                'nama_bidang' => 'C Programming',
                'gambar' => 'c'
            ],
            [
                'nama_bidang' => 'Java',
                'gambar' => 'java'
            ],
            [
                'nama_bidang' => 'Dart',
                'gambar' => 'dart'
            ],
            [
                'nama_bidang' => 'Git',
                'gambar' => 'git'
            ],
            [
                'nama_bidang' => 'Visual Studio',
                'gambar' => 'visual-studio'
            ]
        ];

        Bidang::insert($bidangsData);

        $this->command->info('Bidang seeded!');


        $plansData = [
            [
                'harga' => '2100000',
                'diskon' => '99000',
                'durasi' => '6'
            ],
            [
                'harga' => '4200000',
                'diskon' => '179000',
                'durasi' => '6'
            ],
            [
                'harga' => '350000',
                'diskon' => '29000',
                'durasi' => '6'
            ]
        ];

        Plan::insert($plansData);

        $this->command->info('Plan seeded!');

        $fitursData = [
            [
                'nama_fitur' => '900+ Materi Video',
            ],
            [
                'nama_fitur' => '900+ Modul Praktik Portfolio'
            ],
            [
                'nama_fitur' => 'Sertifikat di Tiap Materi'
            ],
            [
                'nama_fitur' => 'Diskon untuk Bootcamp'
            ],
            [
                'nama_fitur' => 'Grup Komunitas'
            ]
        ];

        Fitur::insert($fitursData);

        $plansFitursData = [
            [
                'plan_id' => '1',
                'fitur_id' => '1'
            ],
            [
                'plan_id' => '1',
                'fitur_id' => '2'
            ],
            [
                'plan_id' => '1',
                'fitur_id' => '3'
            ],
            [
                'plan_id' => '1',
                'fitur_id' => '4'
            ],
            [
                'plan_id' => '2',
                'fitur_id' => '1'
            ],
            [
                'plan_id' => '2',
                'fitur_id' => '2'
            ],
            [
                'plan_id' => '2',
                'fitur_id' => '3'
            ],
            [
                'plan_id' => '2',
                'fitur_id' => '4'
            ],
            [
                'plan_id' => '2',
                'fitur_id' => '5'
            ],
            [
                'plan_id' => '3',
                'fitur_id' => '1'
            ],
            [
                'plan_id' => '3',
                'fitur_id' => '2'
            ],
            [
                'plan_id' => '3',
                'fitur_id' => '3'
            ],
        ];

        PlansFitur::insert($plansFitursData);

        $this->command->info('PlansFitur seeded!');

        $CoursesData = [
            [
                'judul' => 'Basic Python Programming',
                'deskripsi' => 'Beginner Edition',
                'rating' => 5,
                'harga' => 0.0,
                'bidangId' => '12'
            ],
            [
                'judul' => 'Statistics for Data Science and Business Analysis',
                'deskripsi' => 'Beginner Edition',
                'rating' => 5,
                'harga' => 0.0,
                'bidangId' => '12'            
            ],
            [
                'judul' => 'Data Scientist Beginners: Linear Regression Analysis',
                'deskripsi' => 'Beginner Edition',
                'rating' => 5,
                'harga' => 0.0,
                'bidangId' => '12'            
            ],
            [
                'judul' => 'Learn Data Science with Python Pandas',
                'deskripsi' => 'Intermediate',
                'rating' => 5,
                'harga' => 12.0,
                'bidangId' => '12'            
            ]
        ];

        Course::insert($CoursesData);
    }
}