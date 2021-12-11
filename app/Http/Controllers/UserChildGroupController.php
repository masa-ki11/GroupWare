<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserChildGroupRequest;
use App\Http\Requests\UpdateUserChildGroupRequest;
use App\Models\UserChildGroup;

class UserChildGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreUserChildGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserChildGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserChildGroup  $userChildGroup
     * @return \Illuminate\Http\Response
     */
    public function show(UserChildGroup $userChildGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserChildGroup  $userChildGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(UserChildGroup $userChildGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserChildGroupRequest  $request
     * @param  \App\Models\UserChildGroup  $userChildGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserChildGroupRequest $request, UserChildGroup $userChildGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserChildGroup  $userChildGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserChildGroup $userChildGroup)
    {
        //
    }
}
