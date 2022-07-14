<?php

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

use App\Http\Controllers\cvController;


Route::get('/', [cvController::class, 'index'])->name('index');
Route::get('cv-builder', [cvController::class, 'cv_builder'])->name('cv_builder');
Route::get('cv', [cvController::class, 'cv'])->name('cv');
Route::get('about', [cvController::class, 'about'])->name('about');
Route::get('contact', [cvController::class, 'contact'])->name('contact');
Route::get('privacy-policy', [cvController::class, 'privacy_policy'])->name('privacy_policy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
