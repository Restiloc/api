<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Folder;
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
        // dd(Vehicle::with(['folder', 'model'])->first());
        // dd(VehicleModel::with(['vehicles'])->first());
        // dd(Mission::with(['folder', 'garage', 'expert', 'unavailability'])->first());
        // dd(Expert::with(['missions'])->first());
        // dd(Unavailability::with(['reason', 'mission'])->first());
        // dd(Reason::with(['unavailabilities'])->first());
        // dd(Folder::with(['vehicle', 'missions'])->first());
        // dd(Garage::with(['missions'])->first());
    }
}
