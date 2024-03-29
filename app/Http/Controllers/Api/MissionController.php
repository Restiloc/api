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
        $mission = ResourcesMission::collection(Mission::with('vehicle', 'expert', 'garage', 'client', 'unavailability', 'pree')->get());
        return response()->json($mission, 200);
    }

    /**
     * Display a listing of expert's missions.
     *
     * @return \Illuminate\Http\Response
     */
    public function expert(Request $request)
    {
        switch ($request->p) {
            case "today":
                $missions = ResourcesMission::collection(
                    $request->user()
                        ->missions
                        ->where("isFinished", false)
                        ->where("dateMission", now()->format("Y-m-d"))
                        ->load('vehicle', 'client', 'garage', 'unavailability', 'pree')
                );
                break;
            case "finished":
                $missions = ResourcesMission::collection(
                    $request->user()
                        ->missions
                        ->where("isFinished", true)
                        ->load('vehicle', 'client', 'garage', 'unavailability', 'pree')
                );
                break;
            default:
                $missions = ResourcesMission::collection(
                    $request->user()
                        ->missions
                        ->where("isFinished", false)
                        ->load('vehicle', 'client', 'garage', 'unavailability', 'pree')
                    );
                break;
        }

        return response()->json($missions, 200);
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
            'type' => 'required|string',
            'folder' => 'required|string',
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

        $mission = new ResourcesMission($mission->load('vehicle', 'expert', 'garage', 'client', 'unavailability', 'pree'));
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
            'dateMission' => 'date',
            'startedAt' => 'time',
            'kilometersCounter' => 'bigInteger',
            'type' => 'string',
            'folder' => 'string',
            'isFinished' => 'boolean',
            'signature' => 'string',
            'signedByClient' => 'boolean'
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
