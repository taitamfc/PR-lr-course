<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UpdateStepRequest;
use App\Http\Requests\StoreStepRequest;

use App\Services\Interfaces\StepServiceInterface;
use App\Models\Step;


class StepController extends Controller
{
    protected $stepService;

    public function __construct(StepServiceInterface $stepService ){
        $this->stepService = $stepService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $this->stepService->getAll($request);
        return response()->json($items,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function show(Step $step)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function edit(Step $step)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStepRequest  $request
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStepRequest $request, Step $step)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function destroy(Step $step)
    {
        //
    }
}
