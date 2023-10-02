<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{

    public function run(): void
    {
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
                'harga' => 0.0,
                'bidangId' => '12'            
            ]
        ];

        Course::insert($CoursesData);
    }
}
