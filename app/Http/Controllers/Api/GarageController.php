<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Garage as ResourcesGarage;
use App\Http\Controllers\Controller;
use App\Models\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesGarage::collection(Garage::with('missions')->get());
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
            'name' => 'required|string',
            'addressNumber' => 'required|string',
            'street' => 'required|string',
            'postalCode' => 'required|string',
            'city' => 'required|string',
            'phoneNumber' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        if (Garage::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Garage added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add garage',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function show(Garage $garage)
    {
        return new ResourcesGarage($garage->load('missions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garage $garage)
    {
        $request->validate([
            'name' => 'required|string',
            'addressNumber' => 'required|int',
            'street' => 'required|string',
            'postalCode' => 'required|int',
            'city' => 'required|string',
            'phoneNumber' => 'required|int|min:10',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        if ($garage->update($request->all())) {
            return response()->json([
                'success' => true,
                'message' => 'Garage updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update garage',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garage $garage)
    {
        if (!$garage) {
            return response()->json([
                'error' => 'Garage not found'
            ], 404);
        }

        if ($garage->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Garage deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete garage'
            ], 400);
        }
    }
}
