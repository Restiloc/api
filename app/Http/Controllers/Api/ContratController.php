<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Contrat as ResourcesContrat;
use App\Http\Controllers\Controller;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contrat = ResourcesContrat::collection(Contrat::all());
        return response()->json($contrat, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contrat $contrat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrat $contrat)
    {
        //
    }
}
