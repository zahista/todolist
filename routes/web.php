<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/restaurant/{restaurant}', [DashboardController::class, 'show'])->name('show');


Route::get('/admin/restaurants', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/restaurants', [AdminController::class, 'create'])->name('admin.create.restaurant');
