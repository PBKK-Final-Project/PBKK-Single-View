<?php

namespace App\Http\Module\Course\Infrastructure\Repository;

use App\Http\Module\Course\Domain\Model\Course;
use App\Http\Module\Course\Domain\Services\Repository\CourseRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CourseRepository implements CourseRepositoryInterface
{
    public function save(Course $course)
    {
        $course = DB::table('Courses')->insert(
            [
              'judul' => $course->judul,
              'deskripsi' => $course->deskripsi,
              'rating' => $course->rating,
              'harga' => $course->harga,
              'bidangId' => $course->bidangId
            ]
        );

        return $course;
    }
}
