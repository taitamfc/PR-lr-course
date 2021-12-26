<?php
namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Repositories\Interfaces\CourseInterface;
use App\Repositories\Eloquent\EloquentRepository;

class CourseRepository extends EloquentRepository implements CourseInterface
{

    public function getModel()
    {
        return Course::class;
    }
}