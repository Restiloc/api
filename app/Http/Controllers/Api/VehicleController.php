<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Vehicle as ResourcesVehicle;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = ResourcesVehicle::collection(Vehicle::with('model', 'missions')->get());
        return response()->json($vehicle, 200);
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
            'licencePlate' => 'required|string',
            'color' => 'required|string',
            'releaseYear' => 'required|integer',
        ]);

        if (Vehicle::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Vehicle added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add vehicle',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found.'], 404);
        }

        $vehicle = new ResourcesVehicle($vehicle->load('model', 'missions'));
        return response()->json($vehicle, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'licencePlate' => 'required|string',
            'color' => 'required|string',
            'releaseYear' => 'required|integer',
        ]);

        if ($vehicle->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Vehicle updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update vehicle',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        if (!$vehicle) {
            return response()->json([
                'success' => 'false',
                'message' => 'Vehicle not found',
            ], 404);
        }

        if ($vehicle->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'Vehicle deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete vehicle',
            ], 400);
        }
    }
}
