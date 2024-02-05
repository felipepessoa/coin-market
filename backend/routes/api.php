<?php

use App\Http\Controllers\Coins\Markets\MarketsController;
use App\Http\Controllers\Coins\CoinController;
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


Route::group(['prefix' => 'v1'], function () {

    Route::group(['prefix' => 'coin'], function () {

        Route::group(['prefix' => 'markets'], function () {
            Route::get('/', [MarketsController::class, 'index']);
        });

        Route::get('/', [CoinController::class, 'index']);


    });

});
