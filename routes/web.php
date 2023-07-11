<?php

use App\Http\Controllers\Auth\CellAdminAuthController;
use App\Http\Controllers\Auth\CitizenAuthController;
use App\Http\Controllers\Auth\SectorAdminAuthController;
use App\Http\Controllers\Auth\SuperuserAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CellRequestController;
use App\Http\Controllers\SectorRequestController;
use Illuminate\Support\Facades\Route;



Route::get('/', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'showServices'])->name('categories.show');
Route::post('/cell/requests', [CellRequestController::class, 'store'])->name('cell.requests.store');
Route::post('/sector/requests', [SectorRequestController::class, 'store'])->name('sector.requests.store');
Route::get('/cells/{sector}', [CellRequestController::class, 'getCellsBySector'])->name('cells.bySector');



// Superuser Authentication Routes
Route::prefix('superuser')->group(function () {
    Route::get('login', [SuperuserAuthController::class, 'showLoginForm'])->name('superuser.login');
    Route::post('login', [SuperuserAuthController::class, 'login'])->name('superuser.login.submit');
});

// Citizen Authentication Routes
Route::prefix('citizen')->group(function () {
    Route::get('login', [CitizenAuthController::class, 'showLoginForm'])->name('citizen.login');
    Route::post('login', [CitizenAuthController::class, 'login'])->name('citizen.login.submit');
    Route::post('register', [CitizenAuthController::class, 'register'])->name('citizen.register');
    Route::get('logout', [CitizenAuthController::class, 'logout']);
});

// Cell Admin Authentication Routes
Route::prefix('cell-admin')->group(function () {
    Route::get('login', [CellAdminAuthController::class, 'showLoginForm'])->name('cell-admin.login');
    Route::post('login', [CellAdminAuthController::class, 'login'])->name('cell-admin.login.submit');
});

// Sector Admin Authentication Routes
Route::prefix('sector-admin')->group(function () {
    Route::get('login', [SectorAdminAuthController::class, 'showLoginForm'])->name('sector-admin.login');
    Route::post('login', [SectorAdminAuthController::class, 'login'])->name('sector-admin.login.submit');
});
