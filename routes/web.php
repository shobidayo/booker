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
//'/'がリクエストされたときにviewフォルダのhotelsフォルダindex.blade.phpが開くようにしている
Route::get('/reservations',[ReservationController::class, 'select']); 
Route::post('/plans',[ReservationController::class,'search']);



Route::get('/plans',[PlanController::class,'choices']);