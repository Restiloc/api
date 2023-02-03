<?php

use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\PersonalAccessToken;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PreeController;
use App\Http\Controllers\Api\ExpertController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\ReasonController;
use App\Http\Controllers\Api\MissionController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\VehicleModelController;
use App\Http\Controllers\Api\VehicleExpertController;
use App\Http\Controllers\Api\UnavailabilityController;

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

Route::post('/auth/register', [AuthController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('experts', ExpertController::class);
    Route::apiResource('garages', GarageController::class);
    Route::apiResource('missions', MissionController::class);
    Route::apiResource('reasons', ReasonController::class);
    Route::apiResource('unavailabilities', UnavailabilityController::class);
    Route::apiResource('vehicles', VehicleController::class);
    Route::apiResource('models', VehicleModelController::class);
    Route::apiResource('pree', PreeController::class);
    Route::get('expertises', [VehicleExpertController::class, 'index'])->name('expertises.index');
    Route::get('/me', function (Request $request) {
        return $request->user()->load('missions');
    });
});
