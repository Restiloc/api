<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        dd(Vehicle::with('folder')->first());
    }
}
