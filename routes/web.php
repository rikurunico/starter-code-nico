<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard.home');
    })->name('home')->middleware('can:dashboard');

    Route::get('/profile', function () {
        return view('dashboard.profile');
    })->name('profile')->middleware('can:profile');

    Route::get('/change-password', function () {
        return view('dashboard.change-password');
    })->name('change-password')->middleware('can:change-password');
});
