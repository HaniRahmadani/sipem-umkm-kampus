<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MonitoringController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/umkm/{id}', [UmkmController::class, 'show']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proses']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'storeRegister']);

Route::middleware('auth')->group(function () {

    Route::get('/admin/umkm', [UmkmController::class, 'index']);
    Route::get('/admin/umkm/create', [UmkmController::class, 'create']);
    Route::post('/admin/umkm', [UmkmController::class, 'store']);

    Route::delete('/admin/umkm/{id}', [UmkmController::class, 'destroy']);

    Route::get('/admin/monitoring/create/{umkm}', [MonitoringController::class, 'create']);
    Route::post('/admin/monitoring', [MonitoringController::class, 'store']);
    

});
