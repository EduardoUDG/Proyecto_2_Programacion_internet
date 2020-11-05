<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
    return view('auth.login');
});

// Metodo para incluir las rutas hacia el controlador
Route::resource('empleados', EmpleadosController::class);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
