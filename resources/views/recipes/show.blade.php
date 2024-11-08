@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $recipe->name }}</h1>

        <!-- Imagen de la receta (si existe) -->
        @if($recipe->image)
            <div class="mb-4">
                <img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" class="img-fluid rounded">
            </div>
        @endif

        <!-- Ingredientes -->
        <div class="mb-4">
            <h2>Ingredientes:</h2>
            <p>{{ $recipe->ingredients }}</p>
        </div>

        <!-- Pasos -->
        <div class="mb-4">
            <h2>Pasos:</h2>
            <p>{{ $recipe->steps }}</p>
        </div>

        <!-- Categoría -->
        @if($recipe->category)
            <div class="mb-4">
                <h3>Categoría: {{ $recipe->category->name }}</h3>
            </div>
        @endif

        <!-- Botones de acción -->
        <div class="mb-4">
            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Editar Receta
            </a>

            <!-- Formulario para eliminar receta -->
            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta receta?')">
                    <i class="bi bi-trash"></i> Eliminar Receta
                </button>
            </form>
        </div>

        <!-- Enlace para volver a la lista de recetas -->
        <a href="{{ route('recipes.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Volver a la lista de recetas
        </a>
    </div>
@endsection
