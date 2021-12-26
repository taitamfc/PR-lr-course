<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrackStepRequest;
use App\Http\Requests\UpdateTrackStepRequest;
use App\Models\TrackStep;

class TrackStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTrackStepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrackStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrackStep  $trackStep
     * @return \Illuminate\Http\Response
     */
    public function show(TrackStep $trackStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackStep  $trackStep
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackStep $trackStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrackStepRequest  $request
     * @param  \App\Models\TrackStep  $trackStep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrackStepRequest $request, TrackStep $trackStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackStep  $trackStep
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackStep $trackStep)
    {
        //
    }
}
