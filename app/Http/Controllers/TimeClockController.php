<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTimeClockRequest;
use App\Http\Requests\UpdateTimeClockRequest;
use App\Models\TimeClock;
use Illuminate\Support\Facades\DB;
use Request;
use App\Models\User;
class TimeClockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::find(1)->timeclocks()->get();
        dd($data);
        return view("index", compact('data'));
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
     * @param  \App\Http\Requests\StoreTimeClockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimeClockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeClock  $timeClock
     * @return \Illuminate\Http\Response
     */
    public function show(TimeClock $timeClock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeClock  $timeClock
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeClock $timeClock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimeClockRequest  $request
     * @param  \App\Models\TimeClock  $timeClock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimeClockRequest $request, TimeClock $timeClock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeClock  $timeClock
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeClock $timeClock)
    {
        //
    }
}
