@extends('layouts.tamplate')

@section('title', 'Create categori')

@section('content')

    <h1>Show de categoria</h1>
    <a href="{{ route('categorias.index') }}">Regresar a categorias</a>
    <br><br>

    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar Categoria</button>
    </form>

    <h4>Información de la categoría</h4>
    <p><b>Descripción:</b> {{ $categoria->descripcion }}</p>
    <a href="{{ route('categorias.edit', $categoria) }}">Editar categoria</a>


@endsection
