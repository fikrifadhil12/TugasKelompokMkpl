<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\menuController;

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

// test

Route::get('/logiin', [loginController::class, 'login'])->name('login');
Route::post('/login-user', [loginController::class, 'loginUser'])->name('login-user');
Route::get('/regis', [loginController::class, 'regist']);
Route::post('/regist-user', [loginController::class, 'RegisterUser'])->name('regist-user');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/report', [reportController::class, 'showReport'])
    ->name('report');

Route::get('/profilee', [profileController::class, 'acount'])
    ->name('profile');

 Route::get('/menu', [menuController::class, 'menuu'])
    ->name('menu');


