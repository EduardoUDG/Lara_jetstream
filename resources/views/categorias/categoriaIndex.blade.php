@extends('layouts.tamplate')

@section('title', 'Index categori')

@section('content')

    <h1>Vista index de categorias</h1>
    <a href="{{ route('categorias.create') }}">Crear categoria</a><br><br>

    @if ( $categorias->count() > 0 )
        <ul>
            @foreach ($categorias as $categoria)
                <li><a href="">{{ $categoria->descripcion }}</a></li>
            @endforeach
        </ul>
    @else
        <p>No hay categorias creadas</p>
    @endif

@endsection
