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
        $model = ResourcesVehicleModel::collection(VehicleModel::with('vehicles')->get());
        return response()->json($model, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|string',
            'brand' => 'required|string',
        ]);

        if (VehicleModel::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Model of vehicle added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add the model of vehicle ',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleModel  $model
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleModel $model)
    {
        if (!$model) {
            return response()->json(['error' => 'Model of vehicle not found.'], 404);
        }

        $model = new ResourcesVehicleModel($model->load('vehicles'));
        return response()->json($model, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleModel  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleModel $model)
    {
        $request->validate([
            'label' => 'required|string',
            'brand' => 'required|string',
        ]);

        if ($model->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Model of vehicle updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update the model of vehicle ',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleModel  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleModel $model)
    {
        if (!$model) {
            return response()->json([
                'success' => 'false',
                'message' => 'Model of vehicle not found',
            ], 404);
        }

        if ($model->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'Model of vehicle deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete the model of vehicle ',
            ], 400);
        }
    }
}
