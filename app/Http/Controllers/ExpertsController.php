<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpertsRequest;
use App\Http\Requests\UpdateExpertsRequest;
use App\Models\Experts;

class ExpertsController extends Controller
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
     * @param  \App\Http\Requests\StoreExpertsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpertsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function show(Experts $experts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function edit(Experts $experts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpertsRequest  $request
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpertsRequest $request, Experts $experts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experts  $experts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experts $experts)
    {
        //
    }
}
