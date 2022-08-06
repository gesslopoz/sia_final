<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/artist', [PageController::class, 'artist']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/feedback', [PageController::class, 'feedback']);

Route::get('/artist', [ArtistController::class, 'index']);
