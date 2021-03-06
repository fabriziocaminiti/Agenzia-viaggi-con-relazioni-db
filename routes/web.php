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
Route::get('/form',[App\Http\Controllers\HomeController::class, 'create'])->name('mailcreate');
Route::post('/invio',[App\Http\Controllers\HomeController::class, 'store'])->name('store');

//locations routes

Route::get('/sedi',[App\Http\Controllers\LocationController::class, 'index'])->name('locations.index');
Route::get('/registrati',[App\Http\Controllers\LocationController::class, 'create'])->name('locations.create');
Route::post('/inviato',[App\Http\Controllers\LocationController::class, 'store'])->name('locations.store');
Route::delete('/sedi/elimina/{location}',[App\Http\Controllers\LocationController::class, 'destroy'])->name('locations.destroy');
Route::get('locations/modifica/{location}',[App\Http\Controllers\LocationController::class,'edit'])->name('locations.edit');
Route::put('locations/inserisci/{location}',[App\Http\Controllers\LocationController::class,'update'])->name('locations.update');


