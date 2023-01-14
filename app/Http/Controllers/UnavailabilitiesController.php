<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnavailabilitiesRequest;
use App\Http\Requests\UpdateUnavailabilitiesRequest;
use App\Models\Unavailabilities;

class UnavailabilitiesController extends Controller
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
     * @param  \App\Http\Requests\StoreUnavailabilitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnavailabilitiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unavailabilities  $unavailabilities
     * @return \Illuminate\Http\Response
     */
    public function show(Unavailabilities $unavailabilities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unavailabilities  $unavailabilities
     * @return \Illuminate\Http\Response
     */
    public function edit(Unavailabilities $unavailabilities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnavailabilitiesRequest  $request
     * @param  \App\Models\Unavailabilities  $unavailabilities
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnavailabilitiesRequest $request, Unavailabilities $unavailabilities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unavailabilities  $unavailabilities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unavailabilities $unavailabilities)
    {
        //
    }
}
