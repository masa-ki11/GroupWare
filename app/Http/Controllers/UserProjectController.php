<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserProjectRequest;
use App\Http\Requests\UpdateUserProjectRequest;
use App\Models\UserProject;

class UserProjectController extends Controller
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
     * @param  \App\Http\Requests\StoreUserProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProject  $userProject
     * @return \Illuminate\Http\Response
     */
    public function show(UserProject $userProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProject  $userProject
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProject $userProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProjectRequest  $request
     * @param  \App\Models\UserProject  $userProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProjectRequest $request, UserProject $userProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProject  $userProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProject $userProject)
    {
        //
    }
}
