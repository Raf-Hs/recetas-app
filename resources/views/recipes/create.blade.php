@extends('layouts.app')

@section('content')
    <h1>Agregar Nueva Receta</h1>

    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredientes:</label>
            <textarea name="ingredients" id="ingredients" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="steps" class="form-label">Pasos:</label>
            <textarea name="steps" id="steps" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Imagen (opcional):</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Categoría (opcional):</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="">Seleccione una categoría</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Receta</button>
    </form>
@endsection
