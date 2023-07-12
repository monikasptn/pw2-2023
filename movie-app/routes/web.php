<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


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

Route::get('/', function () {
    return view('index');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);

Route::get('/reviews', [ReviewController::class, 'index']);

Route::get('/users', function () {
    return view('users/index');
});

Route::get('/movies/create', [MovieController::class, 'create']);

Route::get('/genres/create', [GenreController::class, 'create']);

Route::get('/reviews/create', [ReviewController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store']);

Route::post('/genres', [GenreController::class, 'store']);

Route::post('/reviews', [ReviewController::class, 'store']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);

Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);

Route::get('/genres/{genre}/edit', [GenreController::class, 'edit']);

Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);

Route::put('/movies/{movie}', [MovieController::class, 'update']);

Route::put('/genres/{genre}', [GenreController::class, 'update']);

Route::put('/reviews/{review}', [ReviewController::class, 'update']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [AuthController::class, 'showRegistrationForm']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/movies', MovieController::class);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/genres', GenreController::class);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/reviews', ReviewController::class);
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');