<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Pree as ResourcesPree;
use App\Models\Pree;
use Illuminate\Http\Request;

class PreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pree = ResourcesPree::collection(Pree::with('mission')->get());
        return response()->json($pree, 200);
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
            'description' => 'required|string',
            'image' => 'required|string',
            'signature' => 'required|string',
        ]);

        if (Pree::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'PREE added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add PREE',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pree  $pree
     * @return \Illuminate\Http\Response
     */
    public function show(Pree $pree)
    {
        if (!$pree) {
            return response()->json(['error' => 'Performance not found.'], 404);
        }

        $pree = new ResourcesPree($pree->load('mission'));
        return response()->json($pree, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pree  $pree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pree $pree)
    {
        $request->validate([
            'label' => 'string',
            'description' => 'string',
            'image' => 'string',
            'signature' => 'string',
        ]);

        if ($pree->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'PREE updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update PREE',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pree  $pree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pree $pree)
    {
        if (!$pree) {
            return response()->json([
                'success' => 'false',
                'message' => 'PREE not found'
            ], 404);
        }

        if ($pree->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'PREE deleted successfully',
                'data' => $pree
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete PREE',
                'data' => $pree
            ], 400);
        }
    }
}
