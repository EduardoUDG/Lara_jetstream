@extends('layouts.tamplate')

@section('title', 'Create categori')

@section('content')

    <h1>Crea una nueva categoria</h1>
    <a href="{{ route('categorias.index') }}">Regresar a categorias</a><br><br>
    <hr>


    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <label for="descripcion">Ingresa descripcion de la categoria:</label><br>
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion"><br><br>

        <button type="submit">Crear categoria</button>
    </form>

@endsection
