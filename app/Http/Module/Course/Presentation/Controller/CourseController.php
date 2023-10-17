<?php

namespace App\Http\Module\Course\Presentation\Controller;

use App\Http\Module\Course\Application\Services\CreateCourse\CreateCourseRequest;
use App\Http\Module\Course\Application\Services\CreateCourse\CreateCourseService;
use Illuminate\Http\Request;

class CourseController
{
    public function __construct(
        private CreateCourseService $create_course_service
    )
    {
    }

    public function createCourse(Request $request){
        $request = new CreateCourseRequest(
            // $request->input('nama'),
            // $request->input('price'),
            // $request->input('description'),
            $request->input('judul'),
            $request->input('deskripsi'),
            $request->input('rating'),
            $request->input('harga'),
            $request->input('bidangId')
        );

        return $this->create_course_service->execute($request);
    }
}
