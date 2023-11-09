<?php

use App\Http\Controllers\ProfileController;

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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HotelController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/reservations',[ReservationController::class, 'select']);
    Route::post('/search/plans',[PlanController::class,'search']);
    Route::get('/plans',[PlanController::class,'choices']);
    Route::get('/plans/{plan}/reservation',[PlanController::class,'show']);
    Route::post('/confirm_reservation',[ReservationController::class,'store']);
    Route::get('/complete/reservation',[ReservationController::class,'complete']);
    Route::delete('/reservation_check/{reservation}',[ReservationController::class, 'delete']);
    Route::get('/reservation_check',[ReservationController::class,'check']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
