<?php

use Illuminate\Support\Facades\Route;

/**
 * Dashboard routes
 */
Route::get('/', function () {
    return view('dashboard',);
})->middleware(['auth'])->name('dashboard');

/**
 * Availability resource routes
 */
Route::resource('availability', \App\Http\Controllers\AvailabilityController::class);

/**
 * Authorization routes
 */
require __DIR__ . '/auth.php';
