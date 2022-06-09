<?php

namespace App\Services;

use App\Repositories\Interfaces\RequirementInterface;
use App\Services\Interfaces\RequirementServiceInterface;

class RequirementService implements RequirementServiceInterface
{
    protected $requirementsRepository;

    public function __construct(RequirementInterface $requirementsRepository)
    {
        $this->requirementsRepository = $requirementsRepository;
    }

    public function getAll($request)
    {
        return $this->requirementsRepository->getAll($request);
    }

    public function findById($id)
    {
        $course = $this->requirementsRepository->findById($id);

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
        $course = $this->requirementsRepository->create($request);

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
        $oldCustomer = $this->requirementsRepository->findById($id);

        if (!$oldCustomer) {
            $newCustomer = null;
            $statusCode = 404;
        } else {
            $newCustomer = $this->requirementsRepository->update($request, $oldCustomer);
            $statusCode = 200;
        }

        return [
            'statusCode' => $statusCode,
            'item' => $newCustomer
        ];
    }

    public function destroy($id)
    {
        $course = $this->requirementsRepository->findById($id);

        $statusCode = 404;
        $message = "User not found";
        if ($course) {
            $this->requirementsRepository->destroy($course);
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
        $course = $this->requirementsRepository->findBySlug($id);

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
