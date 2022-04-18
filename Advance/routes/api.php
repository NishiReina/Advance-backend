<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\ReservationController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/user', UserController::class)->only([
    'store'
]);

Route::apiResource('/', UserController::class)->only([
    'store'
]);
Route::apiResource('/shop', ShopController::class);
Route::apiResource('/nice', NiceController::class)->only([
    'store'
]);

Route::apiResource('/reserve', ReservationController::class)->only([
    'store'
]);