<?php

use App\Models\Requirement;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\RepositoryInterface;

class RequirementRepository extends EloquentRepository implements RepositoryInterface
{

    public function getModel()
    {
        return Requirement::class;
    }

    public function getAll($request)
    {
        $result = $this->model->paginate(10);
        return $result;
    }
    
}
