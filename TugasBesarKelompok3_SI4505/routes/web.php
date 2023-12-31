<?php

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

Route::get('/', [\App\Http\Controllers\Frontend\HomepageController::class, 'index']);
Route::get('/', [\App\Http\Controllers\Frontend\HomepageController::class, 'index'])->name('homepage');
Route::get('/services', [\App\Http\Controllers\Frontend\ServiceController::class, 'index'])->name('services');
Route::get('/bikes', [\App\Http\Controllers\Frontend\BikeController::class, 'index'])->name('bike');
Route::get('/bikes/{bike:slug}', [\App\Http\Controllers\Frontend\BikeController::class, 'show'])->name('bike.show');
Route::get('/contacts', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
