<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChildGroupRequest;
use App\Http\Requests\UpdateChildGroupRequest;
use App\Models\ChildGroup;

class ChildGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreChildGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChildGroup  $childGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ChildGroup $childGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChildGroup  $childGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildGroup $childGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChildGroupRequest  $request
     * @param  \App\Models\ChildGroup  $childGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChildGroupRequest $request, ChildGroup $childGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChildGroup  $childGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildGroup $childGroup)
    {
        //
    }
}
