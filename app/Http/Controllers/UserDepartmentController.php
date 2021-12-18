<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserDepartmentRequest;
use App\Http\Requests\UpdateUserDepartmentRequest;
use App\Models\UserDepartment;

class UserDepartmentController extends Controller
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
     * @param  \App\Http\Requests\StoreUserDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDepartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDepartment  $userDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(UserDepartment $userDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDepartment  $userDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDepartment $userDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDepartmentRequest  $request
     * @param  \App\Models\UserDepartment  $userDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDepartmentRequest $request, UserDepartment $userDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDepartment  $userDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDepartment $userDepartment)
    {
        //
    }
}
