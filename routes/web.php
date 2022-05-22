<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardRentController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemporaryRentController;
use App\Models\User;
use App\Models\Role;

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

Route::resource('dashboard/users', DashboardUserController::class)->middleware('auth');

Route::get('dashboard/admin', function () {
    return view('dashboard.admin.index', [
        'title' => "Admin",
        'admins' => User::where('role_id', 2)->get(),
        'roles' => Role::all(),
    ]);
});

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
