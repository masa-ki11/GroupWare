<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusinessCardInformationRequest;
use App\Http\Requests\UpdateBusinessCardInformationRequest;
use App\Models\BusinessCardInformation;

class BusinessCardInformationController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessCardInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessCardInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessCardInformation  $businessCardInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessCardInformation $businessCardInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessCardInformation  $businessCardInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessCardInformation $businessCardInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessCardInformationRequest  $request
     * @param  \App\Models\BusinessCardInformation  $businessCardInformation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessCardInformationRequest $request, BusinessCardInformation $businessCardInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessCardInformation  $businessCardInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessCardInformation $businessCardInformation)
    {
        //
    }
}
