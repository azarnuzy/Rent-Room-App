<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;
use App\Http\Controllers\DashboardRentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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

Route::resource('dashboard/rents', DashboardRentController::class)->middleware('auth');

Route::resource('dashboard/rooms', RoomController::class)->middleware('auth');

Route::get('/dashboard/users', [UserController::class, 'index'])->middleware('auth');

Route::get('/dashboard/admins', [AdminController::class, 'index'])->middleware('auth');

Route::get('/dashboard/temporaryRents', [TemporaryRentController::class, 'index'])->middleware('auth');

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
