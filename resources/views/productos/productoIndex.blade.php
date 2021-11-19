@extends('layouts.tamplate')

@section('title', 'Index productos')

@section('content')
    <h1>Vista index para crear productos</h1>

    <a href="{{ route('productos.create') }}">Crear un producto</a><br><br>


    <div class="container">
        <div class="row">
            <div class="col-6">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoria</th>
                    </thead>
                    <tbody>
                        @if ( $productos->count() > 0 )
                            @foreach ($productos as $producto)
                                <tr href="">
                                    <td>{{ $producto->id }}</td>
                                    <td><a href="{{ route('productos.show', $producto) }}">{{ $producto->descripcion }}</a></td>
                                    <td>{{ $producto->categorias->descripcion }}</td>
                                </tr>
                            @endforeach
                        @else
                            <p>No hay datos en la base de datos</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
