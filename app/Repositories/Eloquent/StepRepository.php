<?php

namespace App\Repositories\Eloquent;

use App\Models\Step;
use App\Repositories\Interfaces\StepInterface;
use App\Repositories\Eloquent\EloquentRepository;

class StepRepository extends EloquentRepository implements StepInterface
{
    public function getModel()
    {
        return Step::class;
    }

    public function getAll($request){
        $result = $this->model->paginate(10);
        return $result;
    }
}