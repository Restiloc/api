<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Expert as ResourcesExpert;
use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expert = ResourcesExpert::collection(Expert::with('missions')->get());
        return response()->json($expert, 200);
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
            'lastName' => 'required|string',
            'firstName' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|int|min:10',
            'username' => 'required|username|string',
            'password' => 'required|Between:8,12',
            'password_confirmation' => 'required|same:password',
        ]);

        if (Expert::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Expert added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add expert',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function show(Expert $expert)
    {
        if (!$expert) {
            return response()->json(['error' => 'Expert not found.'], 404);
        }

        $expert = new ResourcesExpert($expert->load('missions'));
        return response()->json($expert, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        $request->validate([
            'lastName' => 'required|string',
            'firstName' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|int|min:10',
            'username' => 'required|string',
            'password' => 'required|password|Between:8,12',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($expert->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Expert updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update expert',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expert $expert)
    {
        if (!$expert) {
            return response()->json([
                'error' => 'Expert not found'
            ], 404);
        }

        if ($expert->delete()) {
            return response()->json([
                'success' => 'true',
                'message' => 'Expert deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to delete expert',
            ], 400);
        }
    }
}
