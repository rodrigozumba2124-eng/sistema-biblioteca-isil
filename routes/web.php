<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\LibroController;

// Rutas para Autores
Route::get('/api/autores', [AutorController::class, 'index']);
Route::post('/api/autores', [AutorController::class, 'store']);

// Rutas para Libros
Route::get('/api/libros', [LibroController::class, 'index']);
Route::post('/api/libros', [LibroController::class, 'store']);