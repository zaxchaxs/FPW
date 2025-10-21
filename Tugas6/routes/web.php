<?php

use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::get('/login', [UserController::class, 'showLogin'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');

Route::resource('/categories', CategoryController::class);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layouts.app');
    });

    Route::get('/home', function () {
        return view('pages.home');
    });

    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/tambah-buku', [BukuController::class, 'create']);
    Route::post('/simpan-buku', [BukuController::class, 'store']);
    Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);
    Route::put('/update-buku/{id}', [BukuController::class, 'update']);
    Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy']);
});
