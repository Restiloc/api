<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Garage;
use App\Models\Mission;
use App\Models\Reason;
use App\Models\Unavailability;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // dd(Vehicle::with(['missions', 'model'])->first());
        // dd(VehicleModel::with(['vehicles'])->first());
        // dd(Mission::with(['vehicle', 'garage', 'expert', 'unavailability'])->first());
        // dd(Expert::with(['missions'])->first());
        // dd(Unavailability::with(['reason', 'missions'])->first());
        // dd(Reason::with(['unavailabilities'])->first());
        // dd(Garage::with(['missions'])->first());
    }
}
