<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::resource('canciones', App\Http\Controllers\CancioneController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

