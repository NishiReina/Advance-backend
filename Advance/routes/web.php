<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NiceController;


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


Route::post('/', [UserController::class, 'store']);

Route::post('/api/nice/delete', [NiceController::class, 'destroy']);
Route::get('api/nice/getStatus/{shop_id}', [NiceController::class, 'getStatus']);

Route::get('/mypage/like/{id?}', [ShopController::class, 'likeShop']);
