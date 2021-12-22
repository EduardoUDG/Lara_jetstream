<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-500 leading-tight">
            Hola mundo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-5 shadow-xl sm:rounded-lg">
                <h2 class="font-bold text-2xl" >Todos</h2>


                <div class="mx-auto">
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf

                        <label for="name">Name:</label> <br>
                        <input type="text" placeholder="todo" name="name"><br>
                        <button type="submit" class="shadow py-2 px-4">Add todo</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
