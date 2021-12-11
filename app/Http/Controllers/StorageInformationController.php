<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStorageInformationRequest;
use App\Http\Requests\UpdateStorageInformationRequest;
use App\Models\StorageInformation;

class StorageInformationController extends Controller
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
     * @param  \App\Http\Requests\StoreStorageInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStorageInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StorageInformation  $storageInformation
     * @return \Illuminate\Http\Response
     */
    public function show(StorageInformation $storageInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StorageInformation  $storageInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(StorageInformation $storageInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStorageInformationRequest  $request
     * @param  \App\Models\StorageInformation  $storageInformation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStorageInformationRequest $request, StorageInformation $storageInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StorageInformation  $storageInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(StorageInformation $storageInformation)
    {
        //
    }
}
