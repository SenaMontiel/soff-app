<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

/* 
Por el momento vamos a definir rutas simples aquí, luego les enseño
a generar los controladores de cada ruta.
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/ventas', function () {
    return view('ventas');
});

// Login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);


// Registros
Route::get('/registrar_usuario', [RegisterController::class, 'show']);
Route::post('/registrar_usuario', [RegisterController::class, 'register']);
