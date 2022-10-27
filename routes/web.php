<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionsController;

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
    return view('home');
});

Route::get('/login', [SessionsController::class,'create'])->name('login.index');
Route::post('/login-insertar', [SessionsController::class,'store'])->name('login.store');
Route::get('/logout', [SessionsController::class,'destroy'])->name('logout.destroy');
Route::get('/register', [RegistroController::class,'create'])->name('register.index');
Route::post('/register-insertar', [RegistroController::class,'store'])->name('register.store');

