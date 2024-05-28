<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LockScreenController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Routes for lock screen and unlock screen
Route::get('/lock-screen', [LockScreenController::class, 'lock'])->name('lock-screen');
Route::post('/unlock-screen', [LockScreenController::class, 'unlock'])->name('unlock-screen');


