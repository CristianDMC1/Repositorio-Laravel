<?php

use App\Http\Controllers\CursodbController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludito']);
Route::resource('/cursodbs', CursodbController::class);
Route::resource('/productos', ProductoController::class);


