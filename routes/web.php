<?php

use App\Http\Controllers\CancioneController;
use App\Http\Controllers\CategoriaController;
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
//Middelware para evitar intrusiones sin usuario
Route::controller(CancioneController::class)->group(function(){
    Route::get('/canciones', 'index')->middleware('auth')->name('canciones.index');
    Route::get('/canciones/create', 'create')->middleware('auth')->name('canciones.create');
    Route::post('/canciones/create', 'store')->middleware('auth')->name('canciones.store');
    Route::get('/{categoria}/canciones', 'categoryFilter')->middleware('auth')->name('show.canciones.categoria');
    route::get('/canciones/{cancion}/edit', 'edit')->middleware('auth')->name('canciones.edit');
    Route::put('/canciones/{cancion}/update', 'update')->middleware('auth')->name('cancion.update');
    Route::delete('/canciones/delete/{cancionId}', 'destroy')->middleware('auth')->name('canciones.destroy');
});

Route::controller(CategoriaController::class)->group(function(){
    Route::get('/categorias', 'index')->middleware('auth')->name('categorias.index');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

