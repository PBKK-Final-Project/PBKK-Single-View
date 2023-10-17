<?php

namespace App\Http\Module\Course\Application\Services\CreateCourse;

use App\Http\Module\Course\Application\Services\CreateCourse\CreateCourseRequest;
use App\Http\Module\Course\Domain\Model\Course;
use App\Http\Module\Course\Domain\Services\Repository\CourseRepositoryInterface;
use App\Http\Module\Course\Infrastructure\Repository\CourseRepository;

class CreateCourseService
{

    public function __construct(
        // private CourseRepositoryInterface $course_repository
        private CourseRepository $course_repository
    )
    {
    }

  // "judul", "deskripsi", "rating", "harga", "bidangId"
    
    public function execute(CreateCourseRequest $request){
        $course = new Course(
            $request->judul,
            $request->deskripsi,
            $request->rating,
            $request->harga,
            $request->bidangId
        );

        return $this->course_repository->save($course);
    }
}
