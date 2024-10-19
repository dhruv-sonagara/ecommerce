<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register', 'register')->name('register');
Route::post('registerSave', [AuthController::class, 'register'])->name('registerSave');


Route::view('login', 'login')->name('login');
Route::post('loginMatch', [AuthController::class, 'login'])->name('loginMatch');

Route::get('dashboard', [AuthController::class, 'dashboardPage'])->name('dashboard');
Route::get('dashboard/inner', [AuthController::class, 'innerPage'])->name('inner');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');