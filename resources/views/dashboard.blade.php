<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-500 leading-tight">
            Hola mundo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--  <x-jet-welcome />  --}}
                <p class="p-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quod eum ullam provident, culpa necessitatibus optio inventore
                    est qui repellendus consectetur quisquam eligendi odit recusandae
                    quibusdam a quae cupiditate! Quae, labore?
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
