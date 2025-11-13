<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/restaurant/{restaurant}', [DashboardController::class, 'show'])->name('show');


Route::get('/admin/restaurants', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::post('/admin/restaurants', [AdminController::class, 'create'])->name('admin.create.restaurant');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');

Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/register', [LoginController::class, 'register'])->name('create.user');
