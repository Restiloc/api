<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Mission as ResourcesMission;
use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission = ResourcesMission::collection(Mission::with('vehicle', 'expert', 'garage', 'unavailability', 'pree')->get());
        return response()->json($mission, 200);
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
            'dateMission' => 'required|date',
            'startedAt' => 'required|time',
            'kilometersCounter' => 'required|bigInteger',
            'nameExpertFile' => 'required|string',
            'isFinished' => 'required|boolean',
        ]);

        if (Mission::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Mission added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add mission',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        if (!$mission) {
            return response()->json(['error' => 'Mission not found.'], 404);
        }

        $mission = new ResourcesMission($mission->load('vehicle', 'expert', 'garage', 'unavailability', 'pree'));
        return response()->json($mission, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        $request->validate([
            'dateMission' => 'required|date',
            'startedAt' => 'required|time',
            'kilometersCounter' => 'required|bigInteger',
            'nameExpertFile' => 'required|string',
            'isFinished' => 'required|boolean',
        ]);

        if ($mission->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Mission updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update the mission',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        if (!$mission) {
            return response()->json([
                'success' => 'false',
                'message' => 'Mission not found',
            ], 404);
        }

        if ($mission->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'Mission deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete mission',
            ], 400);
        }
    }
}
