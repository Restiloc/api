<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VehicleModel as ResourcesVehicleModel;
use App\Http\Controllers\Controller;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesVehicleModel::collection(VehicleModel::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (VehicleModel::create($request->all())) {
            return response()->json([
                'success' => 'VehicleModel add with success'
            ], 200);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleModel $vehicleModel)
    {
        return new ResourcesVehicleModel($vehicleModel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleModel $vehicleModel)
    {
        if ($vehicleModel->update($request->all())) {
            return response()->json([
                'success' => 'VehicleModel modify with success'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleModel $vehicleModel)
    {
        if ($vehicleModel->delete()) {
            return response()->json([
                'success' => 'VehicleModel delete with success'
            ], 200);
        };
    }
}
