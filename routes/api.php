<?php

use App\Http\Controllers\StationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    ["prefix" => "/v1"],
    function () {
        Route::get(
            "getStationNames",
            [StationController::class, "getStationNames"]
        )->name("getStationNames");


        Route::post(
            "getRoute",
            [StationController::class, "getStationBetween"]
        )->name("getRoute");
    }
);
