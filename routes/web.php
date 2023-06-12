<?php

use App\Http\Controllers\TestController;
use App\Models\Client;
use App\Http\Resources\Client as ResourcesClient;
use App\Models\Garage;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{x?}', fn () => [
    "message" => "Welcome to the API of Restiloc",
    "version" => "1.0.0",
    "documentation" => "https://github.com/Restiloc/docs",
    "authors" => [
        "HETT Alizée" => "https://github.com/Dinholu/",
        "SACCHETTO Vladimir" => "https://github.com/Vladimir9595",
        "HENRY Alexis" => "https://github.com/AlxisHenry/"
    ]
]);
