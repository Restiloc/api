<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExpertController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\MissionController;
use App\Http\Controllers\Api\ReasonController;
use App\Http\Controllers\Api\UnavailabilityController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\VehicleModelController;
use App\Http\Controllers\Api\VehicleExpertController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->group(function () {
Route::apiResource('expert', ExpertController::class);
Route::apiResource('garage', GarageController::class);
Route::apiResource('mission', MissionController::class);
Route::apiResource('reason', ReasonController::class);
Route::apiResource('unavailability', UnavailabilityController::class);
Route::apiResource('vehicle', VehicleController::class);
Route::apiResource('vehicle_model', VehicleModelController::class);
Route::apiResource('vehicle_expert', VehicleExpertController::class);

// });
