<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/signin', [App\Http\Controllers\HomeController::class, 'signin'])->name('signin');


//register
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');

//Admin view
Route::get('/home',[AdminController::class,'index']);
