<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LockScreenController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

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

// Routes for home page
Route::get('/internships', [App\Http\Controllers\HomeController::class, 'internships'])->name('internships');
// Sign  in
Route::get('/signinstudent', [App\Http\Controllers\HomeController::class, 'signinstudent'])->name('signin.student');
Route::get('/signinemployer', [App\Http\Controllers\HomeController::class, 'signinemployer'])->name('signin.employer');

//register
Route::get('/registerstudent', [App\Http\Controllers\HomeController::class, 'registerstudent'])->name('register.student');
Route::get('/registeremployer', [App\Http\Controllers\HomeController::class, 'registeremployer'])->name('register.employer');

