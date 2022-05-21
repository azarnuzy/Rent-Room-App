<?php

<<<<<<< HEAD
use App\Http\Controllers\LoginController;
=======
>>>>>>> 2f420137ce5d4ace231afae5aa54a78ecc03abd2
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

<<<<<<< HEAD
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => "Dashboard"
    ]);
=======
Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
>>>>>>> 2f420137ce5d4ace231afae5aa54a78ecc03abd2
})->middleware('auth');

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

// Route::get('/rents', [Rent::class, 'index']);
Route::get('/rents', function () {
    return view('rents', [
        'title' => "Rents List",
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
<<<<<<< HEAD
});
=======
});
>>>>>>> 2f420137ce5d4ace231afae5aa54a78ecc03abd2
