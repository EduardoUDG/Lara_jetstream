@extends('layouts.tamplate')

@section('title', 'Index productos')

@section('content')

    <h1>Vista Show para productos</h1><br><br>
    <a href="{{ route('productos.edit', $producto) }}">Editar producto</a><br>

    <form action="{{ route('productos.destroy', $producto) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar producto</button>
    </form>

    <hr>

    <h4>Información del producto</h4>
    <ul>
        <li><p><b>Descripción:</b> {{ $producto->descripcion }}</p></li>
        <li><p><b>Categoría:</b> {{ $producto->categorias->descripcion }}</p></li>
    </ul>


@endsection
