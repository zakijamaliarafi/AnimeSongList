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

// Show Create Form
Route::get('/dashboard/anime/create', [AnimeController::class, 'create'])
->middleware('auth');

// Store Anime Data
Route::post('/dashboard/anime', [AnimeController::class, 'store'])
->middleware('auth');

// Show Edit Form
Route::get('/dashboard/anime/{anime}/edit', [AnimeController::class, 'edit'])
->middleware('auth');

// Update Anime
Route::put('/dashboard/anime/{anime}', [AnimeController::class, 'update'])
->middleware('auth');

// Delete Listing
Route::delete('/dashboard/anime/{anime}', [AnimeController::class, 'destroy'])
->middleware('auth');

// Show Dashboard Login Form
Route::get('/dashboard/login', [UserController::class, 'login'])
->name('login')
->middleware('guest');

// Log User Out
Route::post('/dashboard/logout', [UserController::class, 'logout'])
->middleware('auth');

// Log In User
Route::post('/dashboard/authenticate', [UserController::class, 'authenticate']);