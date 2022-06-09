<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequirementRequest;
use App\Http\Requests\UpdateRequirementRequest;
use App\Models\Requirement;
use App\Services\Interfaces\RequirementServiceInterface;
use Illuminate\Http\Client\Request;

class RequirementController extends Controller
{
    protected $requirementsRepository;

    public function __construct(RequirementServiceInterface $requirementsRepository)
    {
        $this->requirementsRepository = $requirementsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $this->requirementsRepository->getAll($request);
        return response()->json($items, 200);
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
     * @param  \App\Http\Requests\StoreRequirementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequirementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function show(Requirement $requirement, $slug)
    {
        if (is_numeric($slug)) {
            $item = $this->requirementsRepository->findById($slug);
        } else {
            $item = $this->requirementsRepository->findBySlug($slug);
        }

        return response()->json($item, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function edit(Requirement $requirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequirementRequest  $request
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequirementRequest $request, Requirement $requirement)
    {
        dd($requirement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requirement $requirement)
    {
        //
    }
}
