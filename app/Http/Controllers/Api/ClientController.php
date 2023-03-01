<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Client as ResourcesClient;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = ResourcesClient::collection(Client::with('missions')->get());
        return response()->json($client, 200);
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
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string',
            'phoneNumber' => 'required|string',
            'addressNumber' => 'required|string',
            'street' => 'required|string',
            'postalCode' => 'required|string',
            'city' => 'required|string',
        ]);

        if (Client::create($validatedData)) {
            return response()->json([
                'success' => 'true',
                'message' => 'Client added successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to add client',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        if (!$client) {
            return response()->json(['error' => 'Client not found.'], 404);
        }

        $client = new ResourcesClient($client->load('missions'));
        return response()->json($client, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string',
            'phoneNumber' => 'required|string',
            'addressNumber' => 'required|string',
            'street' => 'required|string',
            'postalCode' => 'required|string',
            'city' => 'required|string',
        ]);

        if ($client->update($request->all())) {
            return response()->json([
                'success' => 'true',
                'message' => 'Client updated successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => 'false',
                'message' => 'Failed to update client',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if (!$client) {
            return response()->json([
                'error' => 'Client not found'
            ], 404);
        }

        if ($client->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Client deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete client'
            ], 400);
        }
    }
}
