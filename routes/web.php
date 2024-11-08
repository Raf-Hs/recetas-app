<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

// Muestra la lista de recetas al acceder a la raíz del sitio
Route::get('/', [RecipeController::class, 'index']);

Route::resource('recipes', RecipeController::class);
Route::resource('categories', CategoryController::class); // Opcional
