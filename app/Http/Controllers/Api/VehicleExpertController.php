<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VehicleExpert as ResourcesVehicleExpert;
use App\Http\Controllers\Controller;
use App\Models\VehicleExpert;
use Illuminate\Http\Request;

class VehicleExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesVehicleExpert::collection(VehicleExpert::with('mission')->get());
    }
}
