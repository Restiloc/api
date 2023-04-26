<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VehicleState;
use App\Models\VehicleModel;
use App\Models\VehicleState as ModelsVehicleState;
use Illuminate\Http\Request;

class VehicleStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = VehicleState::collection(ModelsVehicleState::get());
        return response()->json($model, 200);
    }

}
