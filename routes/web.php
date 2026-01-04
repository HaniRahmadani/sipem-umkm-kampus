<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UmkmController;        // ADMIN
use App\Http\Controllers\UmkmOwnerController;  // PEMILIK UMKM
use App\Http\Controllers\UmkmAuthController;
use App\Http\Controllers\UmkmPublicController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| LOGIN PEMILIK UMKM
|--------------------------------------------------------------------------
*/
Route::get('/login-umkm', [UmkmAuthController::class, 'showLogin']);
Route::post('/login-umkm', [UmkmAuthController::class, 'login']);
Route::post('/logout-umkm', [UmkmAuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| PUBLIK (TANPA LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/user/umkm', [UmkmPublicController::class, 'index']);
Route::get('/user/umkm/{id}', [UmkmPublicController::class, 'show']);

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proses']);
Route::post('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'storeRegister']);

/*
|--------------------------------------------------------------------------
| ADMIN (FULL AKSES)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/admin/umkm', [UmkmController::class, 'index']);
    Route::get('/admin/umkm/create', [UmkmController::class, 'create']);
    Route::post('/admin/umkm', [UmkmController::class, 'store']);
    Route::get('/admin/umkm/{id}/edit', [UmkmController::class, 'edit']);
    Route::put('/admin/umkm/{id}', [UmkmController::class, 'update']);
    Route::delete('/admin/umkm/{id}', [UmkmController::class, 'destroy']);
});

/*
|--------------------------------------------------------------------------
| PEMILIK UMKM (AKSES MILIK SENDIRI)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // DASHBOARD PEMILIK
    Route::get('/umkm/dashboard', [UmkmOwnerController::class, 'dashboard']);

    Route::post('/umkm/logout', [UmkmAuthController::class, 'logout'])
        ->name('umkm.logout');

    // CRUD UMKM MILIK SENDIRI
    Route::get('/umkm', [UmkmOwnerController::class, 'index']);
    Route::get('/umkm/create', [UmkmOwnerController::class, 'create']);
    Route::post('/umkm', [UmkmOwnerController::class, 'store']);
    Route::get('/umkm/{id}/edit', [UmkmOwnerController::class, 'edit']);
    Route::put('/umkm/{id}', [UmkmOwnerController::class, 'update']);
    Route::delete('/umkm/{id}', [UmkmOwnerController::class, 'destroy']);
});