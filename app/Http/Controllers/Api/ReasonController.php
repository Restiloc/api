<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Reason as ResourcesReason;
use App\Http\Controllers\Controller;
use App\Models\Reason;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reason = ResourcesReason::collection(Reason::with('unavailabilities')->get());
        return response()->json($reason, 200);
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
        ]);

        if (Reason::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Reason added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add reason',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function show(Reason $reason)
    {
        if (!$reason) {
            return response()->json(['message' => 'Reason not found.'], 404);
        }

        $reason = new ResourcesReason($reason->load('unavailabilities'));
        return response()->json($reason, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reason $reason)
    {
        $request->validate([
            'label' => 'required|string',
        ]);

        if ($reason->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Reason updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update reason',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reason $reason)
    {
        if (!$reason) {
            return response()->json([
                'success' => 'false',
                'message' => 'Reason not found',
            ], 404);
        }

        if ($reason->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'Reason deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete reason',
            ], 400);
        }
    }
}
