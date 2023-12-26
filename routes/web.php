<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get('/home', [MainController::class, 'home']) -> name('home');
Route::get('/books', [MainController::class, 'books']);
Route::get('/library', [MainController::class, 'library']);
Route::get('/login', [MainController::class, 'login']);
Route::post('/login/check', [MainController::class, 'login_check']);
Route::get('/registration', [MainController::class, 'registration']) -> name('registration');
Route::post('/registration/check', [MainController::class, 'registration_check']);
