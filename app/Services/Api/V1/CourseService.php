<?php

namespace App\Services\Api\V1;

use App\Http\Resources\Api\V1\CourseCollection;
use App\Models\Course;

class CourseService
{
    public function getAllCourse()
    {
        return new CourseCollection(Course::paginate(2));
    }
}
