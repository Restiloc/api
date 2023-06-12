<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PreeController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ExpertController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\ReasonController;
use App\Http\Controllers\Api\MissionController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\StatisticController;
use App\Http\Controllers\Api\VehicleModelController;
use App\Http\Controllers\Api\VehicleExpertController;
use App\Http\Controllers\Api\UnavailabilityController;
use App\Http\Controllers\Api\VehicleStateController;

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
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('missions', MissionController::class);
    Route::apiResource('reasons', ReasonController::class);
    Route::apiResource('status', VehicleStateController::class);
    Route::apiResource('unavailabilities', UnavailabilityController::class);
    Route::apiResource('vehicles', VehicleController::class);
    Route::apiResource('models', VehicleModelController::class);
    Route::apiResource('pree', PreeController::class);
    Route::get('expertises', [VehicleExpertController::class, 'index'])->name('expertises.index');
    Route::get('/me', function (Request $request) {
        return $request->user();
    })->name('me');
    Route::get('/stats', [StatisticController::class, 'getUnavailabilitiesBetweenDates'])->name("stats");
    Route::get('/stats/weekly', [StatisticController::class, 'getWeeklyStats'])->name("stats.weekly");
    Route::get('/me/missions', [MissionController::class, 'expert'])->name('me.missions');
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});