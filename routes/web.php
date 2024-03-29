<?php

use App\Http\Controllers\Auth\CellAdminAuthController;
use App\Http\Controllers\Auth\CitizenAuthController;
use App\Http\Controllers\Auth\SectorAdminAuthController;
use App\Http\Controllers\Auth\SuperUserAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CellRequestController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SectorAdminController;
use App\Http\Controllers\SectorRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'showServices'])->name('categories.show');
Route::post('/cell/requests', [CellRequestController::class, 'store'])->name('cell.requests.store');
Route::post('/sector/requests', [SectorRequestController::class, 'store'])->name('sector.requests.store');
Route::get('/cells/{sector}', [CellRequestController::class, 'getCellsBySector'])->name('cells.bySector');
Route::post('/goto',[CategoryController::class, 'getGoto'])->name('goto');

// Superuser Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [SuperUserAuthController::class, 'showLoginForm'])->name('superuser.login');
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
Route::prefix('cell')->group(function () {
    Route::get('login', [CellAdminAuthController::class, 'showLoginForm'])->name('cell-admin.login');
    Route::post('login', [CellAdminAuthController::class, 'login'])->name('cell-admin.login.submit');
});

// Sector Admin Authentication Routes
Route::prefix('sector')->group(function () {
    Route::get('login', [SectorAdminAuthController::class, 'showLoginForm'])->name('sector-admin.login');
    Route::post('login', [SectorAdminAuthController::class, 'login'])->name('sector-admin.login.submit');
});


Route::middleware(['auth:citizen'])->prefix('citizen')->group(function () {
    // View sector requests
    Route::get('/requests', [SectorRequestController::class, 'viewRequests'])->name('citizen.requests');
});

Route::middleware(['auth:superuser'])->prefix('admin')->group(function () {
    Route::post('/sector-admins', [SectorAdminController::class, 'register'])->name('sector-admins.register');
    Route::get('/dashboard', [SectorAdminController::class, 'index'])->name('sector-admins.index');
    Route::post('/cell-admins', [SectorAdminController::class, 'registerCellAdmin'])->name('cell-admins.register');
    Route::get('/cell-admins', [SectorAdminController::class, 'showCellAdmins']);
    Route::get('/logout', [SuperUserAuthController::class, 'logout']);
    Route::get('/service-category', [CategoryController::class, 'viewCategories']);
    Route::post('/service-category', [CategoryController::class, 'registerCategory'])->name('categories.register');
    Route::get('/services', [CategoryController::class, 'viewServices']);
    Route::post('/services', [CategoryController::class, 'registerService'])->name('services.register');
});


Route::middleware(['auth:sector_admin'])->prefix('sector')->group(function () {
    Route::get('/dashboard', [SectorAdminController::class, 'viewSectorRequests']);
    Route::get('/logout', [SectorAdminAuthController::class, 'logout']);
    Route::post('/sector-schedule', [ScheduleController::class, 'makeAppointment'])->name('sector-schedule.store');
    Route::get('/timetablee', [ScheduleController::class, 'sectorCalendar'])->name('sector-schedule.events');
    Route::view('/timetable','schedule.sector');
});

Route::middleware(['auth:cell_admin'])->prefix('cell')->group(function () {
    Route::get('/dashboard', [SectorAdminController::class, 'viewCellRequests']);
    Route::get('/logout', [CellAdminAuthController::class, 'logout']);
    Route::post('/cell-schedule', [ScheduleController::class, 'makeCellAppointment'])->name('cell-schedule.store');
    Route::get('/timetablee', [ScheduleController::class, 'cellCalendar'])->name('cell-schedule.events');
    Route::view('/timetable','schedule.cell');
});
