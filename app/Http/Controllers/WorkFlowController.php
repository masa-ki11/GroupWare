<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkFlowRequest;
use App\Http\Requests\UpdateWorkFlowRequest;
use App\Models\WorkFlow;

class WorkFlowController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkFlowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkFlowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkFlow  $workFlow
     * @return \Illuminate\Http\Response
     */
    public function show(WorkFlow $workFlow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkFlow  $workFlow
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkFlow $workFlow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkFlowRequest  $request
     * @param  \App\Models\WorkFlow  $workFlow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkFlowRequest $request, WorkFlow $workFlow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkFlow  $workFlow
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkFlow $workFlow)
    {
        //
    }
}
