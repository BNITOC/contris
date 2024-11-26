<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvenController;

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('index');
});

Route::get('/sesion', [SesionController::class,'index'])->name('sesion');

Route::get('/index', [SesionController::class, 'sesion'])->name('index');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


// Ruta para listar los pines
Route::get('/inventario', [InvenController::class, 'index'])->name('inventario.index');
Route::get('/create', [InvenController::class, 'index'])->name('create.index');

Route::get('/usuarios', [UserController::class, 'index']);;
