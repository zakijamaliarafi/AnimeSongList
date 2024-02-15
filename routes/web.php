<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimeController;

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

// All Anime
Route::get('/', [AnimeController::class, 'index']);

// Single Anime
Route::get('/anime/{anime}', [AnimeController::class, 'show']);

// Show Dashboard
Route::get('/dashboard', [UserController::class, 'dashboard'])
->middleware('auth');

// Show Dashboard Anime List by Season
Route::get('/dashboard/season/{year}/{period}', [AnimeController::class, 'seasonAnimeList'])
->middleware('auth');

// Show Dashboard Login Form
Route::get('/dashboard/login', [UserController::class, 'login'])
->name('login')
->middleware('guest');

// Log User Out
Route::post('/dashboard/logout', [UserController::class, 'logout']);

// Log In User
Route::post('/dashboard/authenticate', [UserController::class, 'authenticate']);