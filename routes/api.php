<?php

use App\Http\Controllers\StationController;
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
    ['prefix' => '/v1/station'],
    function () {

        /**GET Station Name */
        Route::get(
            'names',
            [StationController::class, 'getStationNames']
        )->name('names');

        /**Get station in between */
        Route::post(
            'route',
            [StationController::class, 'getStationBetween']
        )->name('route');

        /**Get Metro Lines */
        Route::get(
            'lines',
            [StationController::class, 'getMetroLines']
        )->name('lines');

        /**Get Nearby Metro Stations */
        Route::get(
            'nearby',
            [StationController::class, 'getStationsNearby']
        )->name('nearby');
    }
);
