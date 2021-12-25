<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-500 leading-tight">
            Toys
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto my-3 py-5 px-4 sm:px-6 lg:px-8 bg-white shadow">
        <div class="container">
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-md-10">
                    <h1 class="my-5 text-center">Welcome to secction of toys</h1>

                    <a href="{{ route('toys.create') }}"
                        class="bg-blue-500 px-8 py-4 bg-dark-400 font-bold shadow-lg d-block">Create a toy</a>
                    <!-- Using utilities: -->

                    {{-- Alert --}}
                    @if (session('info'))
                        <x-alert-success>
                            {{ session('info') }}
                        </x-alert-success>
                    @endif


                    <ul class="my-4">
                        @if ($toys->count() > 0)
                            <div class="block w-full overflow-x-auto">
                                <table class="items-center bg-transparent w-full border-collapse ">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Producto
                                            </th>
                                            <th
                                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Precio
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($toys as $toy)
                                        <tr>
                                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                {{ $toy->name }}
                                            </th>
                                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 ">
                                                {{ $toy->price }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                        @else
                            <p class="d-block">No hay registros en la base de datos</p>
                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
