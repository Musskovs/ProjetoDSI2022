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

Route::view('/', 'index')->name('home');

// Usuarios
Route::get('login', [UsuariosController::class, 'index'])->name('usuario.index');
Route::post('login', [UsuariosController::class,'login'])->name('usuario.login');
Route::get('logout', [UsuariosController::class,'logout'])->name('usuario.logout');
Route::post('signin', [UsuariosController::class,'login'])->name('usuario.criar');