<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OnGoingController;
use App\Http\Controllers\PopulerController;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.main');
});

Route::get('/home', [FavoriteController::class, 'home']);
Route::get('/about', [FavoriteController::class, 'about']);
Route::get('/layouts.favorite.all', [FavoriteController::class, 'index']);
Route::get('/layouts.favorite.detail{favorite}', [FavoriteController::class, 'show']);
Route::get('/layouts.populer.all', [PopulerController::class, 'index']);
Route::get('/layouts.populer.detail{populer}', [PopulerController::class, 'show']);
Route::get('/layouts.ongoing.all', [OnGoingController::class, 'index']);
Route::get('/layouts.ongoing.detail{populer}', [OnGoingController::class, 'show']);
