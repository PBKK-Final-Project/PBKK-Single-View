<?php

namespace App\Http\Module\Course\Domain\Services\Repository;

use App\Http\Module\Course\Domain\Model\Course;

interface CourseRepositoryInterface
{
    public function save(Course $course);

}
