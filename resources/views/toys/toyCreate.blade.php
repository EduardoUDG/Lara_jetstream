@extends('layouts.tamplate')

@section('title')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 bg-light border p-5">
            <h1>Formulario para registrar nuevo toy</h1>
            <hr>
            <form action="{{ route('toys.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre del juguete</label><br>
                    <input type="text" name="name" placeholder="Nombre de juguete"
                    value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                </div><br>

                <div class="form-group">
                    <label for="price">Precio del juguete</label><br>
                    <input type="number" name="price" placeholder="Precio de juguete"
                    value="{{ old('name') }}">
                    @error('price')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                </div><br>

                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>

@endsection

