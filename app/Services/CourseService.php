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
        $course = $this->courseRepository->findById($id);

        $statusCode = 200;
        if (!$course) {
            $statusCode = 404;
        }

        return [
            'statusCode' => $statusCode,
            'item' => $course
        ];
    }

    public function create($request)
    {
        $course = $this->courseRepository->create($request);

        $statusCode = 201;
        if (!$course) {
            $statusCode = 500;
        }

        return [
            'statusCode' => $statusCode,
            'item' => $course
        ];
    }

    public function update($request, $id)
    {
        $oldCustomer = $this->courseRepository->findById($id);

        if (!$oldCustomer) {
            $newCustomer = null;
            $statusCode = 404;
        } else {
            $newCustomer = $this->courseRepository->update($request, $oldCustomer);
            $statusCode = 200;
        }

        return [
            'statusCode' => $statusCode,
            'item' => $newCustomer
        ];
    }

    public function destroy($id)
    {
        $course = $this->courseRepository->findById($id);

        $statusCode = 404;
        $message = "User not found";
        if ($course) {
            $this->courseRepository->destroy($course);
            $statusCode = 200;
            $message = "Delete success!";
        }

        return [
            'statusCode' => $statusCode,
            'message' => $message
        ];
    }

    public function findBySlug($id)
    {
        $course = $this->courseRepository->findBySlug($id);

        $statusCode = 200;
        if (!$course) {
            $statusCode = 404;
        }

        return [
            'statusCode' => $statusCode,
            'item' => $course
        ];
    }

}