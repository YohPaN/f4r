<?php

use App\Http\Controllers\ActualitiesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/news', [HomeController::class, 'news'])->name('home.news');
Route::get('/lyrics', [HomeController::class, 'lyrics'])->name('home.lyrics');
Route::get('/shop', [HomeController::class, 'shop'])->name('home.shop');

Route::resource('songs', SongsController::class);

Route::resource('actualities', ActualitiesController::class);
