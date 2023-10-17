<?php

namespace App\Http\Module\Course\Application\Services\CreateCourse;

use App\Http\Module\Course\Application\Services\CreateCourse\CreateCourseRequest;
use App\Http\Module\Course\Domain\Model\Course;
use App\Http\Module\Course\Domain\Services\Repository\CourseRepositoryInterface;

class CreateCourseService
{

    public function __construct(
        private CourseRepositoryInterface $course_repository
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

        $this->course_repository->save($course);
    }
}
