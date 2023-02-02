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
        return ResourcesUnavailability::collection(Unavailability::with('reason', 'missions')->get());
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
            'customerResponsible' => 'required|boolean',
        ]);

        if (Unavailability::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Unavailability added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add unavailability',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unavailability  $unavailability
     * @return \Illuminate\Http\Response
     */
    public function show(Unavailability $unavailability)
    {
        return new ResourcesUnavailability($unavailability->load('reason', 'missions'));
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
        $request->validate([
            'customerResponsible' => 'required|boolean',
        ]);

        if ($unavailability->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Unavailability updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update unavailability',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unavailability  $unavailability
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unavailability $unavailability)
    {
        if (!$unavailability) {
            return response()->json([
                'success' => 'false',
                'message' => 'Unavailability not found',
            ], 404);
        }

        if ($unavailability->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'Unavailability deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete unavailability',
            ], 400);
        }
    }
}
