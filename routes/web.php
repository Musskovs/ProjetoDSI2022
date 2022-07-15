<?php

use App\Http\Controllers\UsuariosController;
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
Route::get('/user/login', [UsuariosController::class, 'index'])->name('usuario.index');
Route::post('/user/login', [UsuariosController::class,'login'])->name('usuario.login');
Route::get('/user/logout', [UsuariosController::class,'logout'])->name('usuario.logout');
Route::get('/user/signup', [UsuariosController::class,'criar'])->name('usuario.criar');
Route::post('/user/signup', [UsuariosController::class,'inserir'])->name('usuario.inserir');