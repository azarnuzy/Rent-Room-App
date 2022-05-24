<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardRentController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardRoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemporaryRentController;

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
    return view('index', [
        'title' => "Home",
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('dashboard/rents/{id}/endTransaction', [DashboardRentController::class, 'endTransaction'])->middleware('auth');

Route::resource('dashboard/rents', DashboardRentController::class)->middleware('auth');

Route::resource('dashboard/rooms', DashboardRoomController::class)->middleware('auth');

Route::get('dashboard/users/{id}/makeAdmin', [DashboardUserController::class, 'makeAdmin'])->middleware('auth');

Route::resource('dashboard/users', DashboardUserController::class)->middleware('auth');

Route::get('dashboard/admin/{id}/removeAdmin', [DashboardAdminController::class, 'removeAdmin'])->middleware('auth');

Route::resource('dashboard/admin', DashboardAdminController::class)->middleware('auth');

Route::get('/dashboard/temporaryRents', [TemporaryRentController::class, 'index'])->middleware('auth');

Route::get('/dashboard/temporaryRents/{id}/acceptRents', [TemporaryRentController::class, 'acceptRents'])->middleware('auth');

Route::get('/dashboard/temporaryRents/{id}/declineRents', [TemporaryRentController::class, 'declineRents'])->middleware('auth');

Route::get('/help', function () {
    return view('help', [
        'title' => "Help",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About"
    ]);
});
