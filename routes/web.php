<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontController::class, 'home'])->name('homepage');
Route::get('about-us', [FrontController::class, 'about'])->name('about');
Route::get('gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('gallery/{slug}', [FrontController::class, 'galleryshow'])->name('galleryshow');
Route::get('kegiatan', [FrontController::class, 'kegiatan'])->name('kegiatan');
Route::get('kegiatan/{slug}', [FrontController::class, 'kegiatanshow'])->name('kegiatanshow');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
