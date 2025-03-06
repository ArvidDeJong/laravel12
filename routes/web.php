<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Livewire\Homepage;
use App\Livewire\StaffLogin;

Route::get('/', Homepage::class)->name('homepage');

// Algemene logout route
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

// Staff routes
Route::prefix('staff')->name('staff.')->group(function () {
    Route::get('login', StaffLogin::class)->name('login');

    Route::middleware(['auth:staff'])->group(function () {
        Route::get('dashboard', Homepage::class)->name('dashboard');
    });
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
