<?php

namespace App\Services;

use App\Repositories\Interfaces\StepInterface;
use App\Services\Interfaces\StepServiceInterface;

class StepService implements StepServiceInterface{
    protected $stepRepository;

    public function __construct(StepInterface $stepRepository){

        $this->StepRepository = $stepRepository;
    }


    public function getAll($request)
    {
        return $this->StepRepository->getAll($request);
    }

    public function findById($id)
    {
        $step = $this->StepRepository->findById($id);
        $statuscode = 200;
        if(!$step){
            $statuscode = 404;
        }
        return [
            'step' => $step,
            'statuscode' => $statuscode,
        ];
    }

    public function create($request)
    {
        $step = $this->StepRepository->create($request);
        $statuscode = 200;

        if(!$step){
            $statuscode = 404;
        }
        return [
            'step' => $step,
            'statuscode' => $statuscode,
        ];
    }

    public function update($request, $id)
    {
        $step = $this->StepRepository->findById($id);
        $this->StepRepository->update($request, $step);

    }

    public function destroy($id)
    {
        $step = $this->StepRepository->findById($id);
        $this->StepRepository->destroy($step);
    }

    
}