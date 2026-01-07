<?php

use App\Http\Controllers\FormSchemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Prueba rápida
Route::get('/test', fn() => response()->json(['api' => 'funciona!']));

// Tus rutas reales
Route::get('/form-schemas', [FormSchemaController::class, 'index']);
