@extends('layouts.tamplate')

@section('title', 'Create Producto')

@section('content')

    <h1>Crear un nuevo producto</h1>
    <a href="{{ route('productos.index') }}">Regresar a productos</a><br><br>
    <hr>


    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="descripcion">Ingresa descripcion del producto:</label><br>
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion"><br><br>


        <label for="id_categoria">Selecciona una categoria:</label><br>
        <select name="id_categoria" id="id_categoria">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->descripcion  }}</option>
            @endforeach
        </select>
        <br><br><br><br>


        <button type="submit">Crear producto</button>
    </form>

@endsection
