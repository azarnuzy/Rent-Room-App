<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;
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

// Route::get('/login', [User::class, 'login']);

// Route::get('/login', function () {
//     return view('login', [
//         'title' => "Login Page",
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/dashboard', function () {
//     return view('dashboard.index', [
//         'title' => "Ruangan",
//         'rooms' => Room::all(),
//     ]);
// })->middleware('auth');

Route::get('/dashboard', [RoomController::class, 'index'])->middleware('auth');

Route::get('/rooms', [RoomController::class, 'index'])->middleware('auth');

Route::get('/dashboard/user', [UserController::class, 'index'])->middleware('auth');

Route::get('/dashboard/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/dashboard/rents', [RentController::class, 'index'])->middleware('auth');

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

/* // Route::get('/rents', [Rent::class, 'index']);
Route::get('/rents', function () {
    return view('rents', [
        'title' => "Peminjaman",
    ]);
});

// Route::get('/rooms', [Room::class, 'index']);
Route::get('/rooms', function () {
    return view('rooms', [
        'title' => "Rooms List",
    ]);
});

// Route::get('/rooms/{room:id}', [Room::class, 'detail']);
Route::get('/rooms/{room:id}', function () {
    return view('room', [
        'title' => "Room Detail",
    ]);
}); */