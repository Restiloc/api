<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoldersRequest;
use App\Http\Requests\UpdateFoldersRequest;
use App\Models\Folders;

class FoldersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoldersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoldersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function show(Folders $folders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function edit(Folders $folders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoldersRequest  $request
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoldersRequest $request, Folders $folders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Folders  $folders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folders $folders)
    {
        //
    }
}
