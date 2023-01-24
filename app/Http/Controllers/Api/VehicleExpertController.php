<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VehicleExpert as ResourcesVehicleExpert;
use App\Http\Controllers\Controller;
use App\Models\VehicleExpert;
use Illuminate\Http\Request;

class VehicleExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesVehicleExpert::collection(VehicleExpert::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (VehicleExpert::create($request->all())) {
            return response()->json([
                'success' => 'VehicleExpert add with success'
            ], 200);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleExpert  $vehicleExpert
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleExpert $vehicleExpert)
    {
        return new ResourcesVehicleExpert($vehicleExpert);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleExpert  $vehicleExpert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleExpert $vehicleExpert)
    {
        if ($vehicleExpert->update($request->all())) {
            return response()->json([
                'success' => 'VehicleExpert modify with success'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleExpert  $vehicleExpert
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleExpert $vehicleExpert)
    {
        if ($vehicleExpert->delete()) {
            return response()->json([
                'success' => 'VehicleExpert delete with success'
            ], 200);
        };
    }
}
