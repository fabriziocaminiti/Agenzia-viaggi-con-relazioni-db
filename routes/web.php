<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//locations routes

Route::get('/sedi',[App\Http\Controllers\LocationController::class, 'index'])->name('locations.index');
Route::get('/registrati',[App\Http\Controllers\LocationController::class, 'create'])->name('locations.create');
Route::post('/inviato',[App\Http\Controllers\LocationController::class, 'store'])->name('locations.store');
