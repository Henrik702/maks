<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('order-items')->group(function () {
    Route::get('/',[\App\Http\Controllers\OrderItemController::class,'getOrderItem']);
    Route::get('/logistics',[\App\Http\Controllers\OrderItemController::class,'getWareHouses']);
});

