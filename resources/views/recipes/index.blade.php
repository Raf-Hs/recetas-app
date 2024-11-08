@extends('layouts.app')

@section('content')
    <h1>Recetas</h1>

    <!-- Botón para agregar nueva receta -->
    <a href="{{ route('recipes.create') }}" class="btn btn-success mb-4">
        <i class="bi bi-plus-circle"></i> Agregar Receta
    </a>

    <!-- Número de recetas -->
    <p><strong>Total de recetas:</strong> {{ count($recipes) }}</p>

    <div class="row">
        @foreach($recipes as $recipe)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Imagen de la receta (si existe) y permitiendo URL completa -->
                    <img src="{{ $recipe->image ? $recipe->image : 'https://via.placeholder.com/150' }}" class="card-img-top rounded-circle" alt="{{ $recipe->name }}">

                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->name }}</h5>
                        <p class="card-text">{{ Str::limit($recipe->ingredients, 50) }}...</p>

                        <!-- Botón para ver los detalles de la receta -->
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary">
                            <i class="bi bi-eye"></i> Ver Detalles
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
