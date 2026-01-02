<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MonitoringController;

Route::get('/', [UmkmController::class, 'landing']);
Route::get('/umkm/{id}', [UmkmController::class, 'show']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proses']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/admin/umkm', [UmkmController::class, 'index']);
    Route::get('/admin/umkm/create', [UmkmController::class, 'create']);
    Route::post('/admin/umkm', [UmkmController::class, 'store']);

    Route::get('/admin/monitoring/create/{umkm}', [MonitoringController::class, 'create']);
    Route::post('/admin/monitoring', [MonitoringController::class, 'store']);

});
