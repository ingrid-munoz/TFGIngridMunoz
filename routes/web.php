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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('usuario', [App\Http\Controllers\UsuarioCrontroller::class, 'usuario'])->name('usuario');
Route::get('curso', [App\Http\Controllers\CursoController::class, 'curso'])->name('curso');
Route::get('departamento', [App\Http\Controllers\CursoController::class, 'departamento'])->name('departamento');

