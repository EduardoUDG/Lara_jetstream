@extends('layouts.tamplate')

@section('title', 'Toys')

@section('content')

    <div class="container">
        <div class="row py-5 justify-content-center bg-light shadow">
            <div class="col-12 col-md-10">
                <h1 class="my-5 text-center">Welcome to secction of toys</h1>


                <hr>
                <a href="{{ route('toys.create') }}" class="btn btn-outline-primary shadow">Create a toy</a>
                {{--  Alert  --}}
                @if ( session('info') )
                    <div class="alert">
                        {{ session('info') }}
                    </div>
                @endif


                <ul class="my-4">
                    @if ( $toys->count() > 0 )
                        @foreach ( $toys as $toy)
                            <li>{{ $toy->name }} | precio: $<small>{{ $toy->price }}</small></li>
                        @endforeach
                    @else
                        <p class="d-block">No hay registros en la base de datos</p>
                    @endif
                </ul>

            </div>
        </div>
    </div>

@endsection
