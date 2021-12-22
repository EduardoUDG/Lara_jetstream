<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-500 leading-tight">
            Hola mundo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-5 shadow-xl sm:rounded-lg">
                <h2 class="font-bold text-2xl" >Todos List</h2>
                <a href="{{ route('todos.create') }}" class="">Create new todo</a>
                <x-button-link route="{{ route('todos.create') }}">
                    Create new todo
                </x-button-link>
                <ul>
                    @if ( $todos->count() > 0)
                        @foreach ($todos as $todo)
                            <li>{{ $todo->name }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
