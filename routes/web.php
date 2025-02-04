<?php

use Illuminate\Support\Facades\Route;

Route::get('/',\App\Http\Controllers\HomeController::class)->name('home');

Route::get('/orders', \App\Http\Controllers\OrdersController::class)
    ->middleware(['auth'])
    ->name('orders');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
