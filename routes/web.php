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

// Route::get('/',[App\Http\Controllers\DestinationController::class,'index'])->name('home');
// Route::get('destination-list-show',[App\Http\Controllers\DestinationController::class,'show'])->name('destination-list-show');
// Route::get('create-destination',[App\Http\Controllers\DestinationController::class,'create'])->name('create-destination');
// Route::post('store-destination',[App\Http\Controllers\DestinationController::class,'store'])->name('store-destination');
// /
// //

Route::get('/',[App\Http\Controllers\CarController::class,'index']);
Route::get('car-list-show',[App\Http\Controllers\CarController::class,'show']);
Route::get('create-car',[App\Http\Controllers\CarController::class,'create']);
Route::post('store-car',[App\Http\Controllers\CarController::class,'store']);

