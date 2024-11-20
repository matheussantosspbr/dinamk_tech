<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/client_register', [App\Http\Controllers\ClientController::class, 'index'])->name('create_client');
Route::post('/client/create', [App\Http\Controllers\ClientController::class, 'clientCreate']);
