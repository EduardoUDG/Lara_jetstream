@extends('layouts.tamplate')

@section('title', 'Create categori')

@section('content')

    <h1>Edita una nueva categoria</h1>
    <a href="{{ route('categorias.index') }}">Regresar a categorias</a><br><br>
    <hr>


    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="descripcion">Ingresa descripcion de la categoria:</label><br>
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion"
        value="{{ old('descrpcion', $categoria->descripcion) }}"><br><br>

        <button type="submit">Editar categoria</button>
    </form>

@endsection
