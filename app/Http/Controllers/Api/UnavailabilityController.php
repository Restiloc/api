<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Unavailability as ResourcesUnavailability;
use App\Http\Controllers\Controller;
use App\Models\Unavailability;
use Illuminate\Http\Request;

class UnavailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesUnavailability::collection(Unavailability::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Unavailability::create($request->all())) {
            return response()->json([
                'success' => 'Unavailability add with success'
            ], 200);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unavailability  $unavailability
     * @return \Illuminate\Http\Response
     */
    public function show(Unavailability $unavailability)
    {
        return new ResourcesUnavailability($unavailability);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unavailability  $unavailability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unavailability $unavailability)
    {
        if ($unavailability->update($request->all())) {
            return response()->json([
                'success' => 'Unavailability modify with success'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unavailability  $unavailability
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unavailability $unavailability)
    {
        if ($unavailability->delete()) {
            return response()->json([
                'success' => 'Unavailability delete with success'
            ], 200);
        };
    }
}
