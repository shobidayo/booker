<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PlanController;

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
Route::get('/',[HotelController::class,'index']);
Route::get('/reservations',[ReservationController::class, 'select']);
Route::post('/search/plans',[PlanController::class,'search']);
Route::get('/plans',[PlanController::class,'choices']);
Route::get('/plans/{plan}/reservation',[PlanController::class,'show']);
Route::post('/confirm_reservation',[ReservationController::class,'store']);
Route::get('/complete/reservation',[ReservationController::class,'complete']);
Route::delete('/reservation_check/{reservation}',[ReservationController::class, 'delete']);
Route::get('/reservation_check',[ReservationController::class,'check']);
