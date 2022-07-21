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

Route::resource('products', App\Http\Controllers\ProductsController::class);
Route::resource('sellers', App\Http\Controllers\SellerController::class);
Route::resource('supplers', App\Http\Controllers\SupplerController::class);
Route::resource('transports', App\Http\Controllers\TransportController::class);
Route::resource('warehouses', App\Http\Controllers\WarehoseController::class);