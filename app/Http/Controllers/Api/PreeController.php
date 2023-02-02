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
        return ResourcesPree::collection(Pree::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Pree::create($request->all())) {
            return response()->json([
                'success' => 'Pree add with success'
            ], 201);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pree  $pree
     * @return \Illuminate\Http\Response
     */
    public function show(Pree $pree)
    {
        return new ResourcesPree($pree);
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
        if ($pree->update($request->all())) {
            return response()->json([
                'success' => 'Pree modify with success'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pree  $pree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pree $pree)
    {
        if ($pree->delete()) {
            return response()->json([
                'success' => 'Pree delete with success'
            ], 200);
        };
    }
}
