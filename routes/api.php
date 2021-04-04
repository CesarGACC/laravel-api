<?php

use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\HistoryController;
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

Route::apiResource('products',ProductController::class);
Route::apiResource('history',HistoryController::class);