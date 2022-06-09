<?php

namespace App\Services;

use App\Repositories\Interfaces\CourseInterface;
use App\Services\Interfaces\CourseServiceInterface;

class CourseService implements CourseServiceInterface
{
    protected $courseRepository;

    public function __construct(CourseInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function getAll($request)
    {
        return $this->courseRepository->getAll($request);
    }
    public function findById($id)
    {
        return $this->courseRepository->findById($id);
    }

    public function create($request)
    {
        $this->courseRepository->create($request);
    }

    public function update($request, $id)
    {
        $course = $this->courseRepository->findById($id);
        $this->courseRepository->update($request, $course);
    }

    public function destroy($id)
    {
        $course = $this->courseRepository->findById($id);
        $this->courseRepository->destroy($course);
    }

    public function findBySlug($id)
    {
        return $this->courseRepository->findBySlug($id);
    }

}
