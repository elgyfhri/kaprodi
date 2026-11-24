<?php

use App\Http\Controllers\AudienceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingSettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');
Route::post('/permohonan-audiensi', [AudienceController::class, 'store'])->name('audience.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/permohonan/{audience}', [DashboardController::class, 'show'])->name('dashboard.show');
    Route::patch('/dashboard/permohonan/{audience}', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard/permohonan/{audience}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    Route::get('/dashboard/konten', [LandingSettingsController::class, 'edit'])->name('dashboard.landing');
    Route::post('/dashboard/konten', [LandingSettingsController::class, 'update'])->name('dashboard.landing.update');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});
