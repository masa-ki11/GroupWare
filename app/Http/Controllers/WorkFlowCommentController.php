<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkFlowCommentRequest;
use App\Http\Requests\UpdateWorkFlowCommentRequest;
use App\Models\WorkFlowComment;

class WorkFlowCommentController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkFlowCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkFlowCommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkFlowComment  $workFlowComment
     * @return \Illuminate\Http\Response
     */
    public function show(WorkFlowComment $workFlowComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkFlowComment  $workFlowComment
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkFlowComment $workFlowComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkFlowCommentRequest  $request
     * @param  \App\Models\WorkFlowComment  $workFlowComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkFlowCommentRequest $request, WorkFlowComment $workFlowComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkFlowComment  $workFlowComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkFlowComment $workFlowComment)
    {
        //
    }
}
