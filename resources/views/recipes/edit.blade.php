@extends('layouts.app')

@section('content')
    <h1>Editar Receta</h1>

    <!-- Formulario de edición de receta -->
    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <!-- Campo para el nombre -->
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $recipe->name }}" required>
        </div>

        <!-- Campo para los ingredientes -->
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredientes:</label>
            <textarea name="ingredients" id="ingredients" class="form-control" required>{{ $recipe->ingredients }}</textarea>
        </div>

        <!-- Campo para los pasos -->
        <div class="mb-3">
            <label for="steps" class="form-label">Pasos:</label>
            <textarea name="steps" id="steps" class="form-control" required>{{ $recipe->steps }}</textarea>
        </div>

        <!-- Campo para la imagen (enlace de la imagen) -->
        <div class="mb-3">
            <label for="image" class="form-label">Imagen (URL):</label>
            <input type="url" name="image" id="image" class="form-control" value="{{ old('image', $recipe->image) }}">
            @if($recipe->image)
                <p class="mt-2">Imagen actual:</p>
                <img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" width="100" class="rounded">
            @endif
        </div>

        <!-- Campo para la categoría (opcional) -->
        @if($categories ?? false)
            <div class="mb-3">
                <label for="category_id" class="form-label">Categoría (opcional):</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Seleccione una categoría</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $recipe->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif

        <!-- Botón para actualizar -->
        <button type="submit" class="btn btn-primary">Actualizar Receta</button>
    </form>
@endsection
