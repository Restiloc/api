<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGaragesRequest;
use App\Http\Requests\UpdateGaragesRequest;
use App\Models\Garages;

class GaragesController extends Controller
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
     * @param  \App\Http\Requests\StoreGaragesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaragesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Garages  $garages
     * @return \Illuminate\Http\Response
     */
    public function show(Garages $garages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Garages  $garages
     * @return \Illuminate\Http\Response
     */
    public function edit(Garages $garages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaragesRequest  $request
     * @param  \App\Models\Garages  $garages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaragesRequest $request, Garages $garages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garages  $garages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garages $garages)
    {
        //
    }
}
