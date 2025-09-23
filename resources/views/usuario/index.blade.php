<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-lg font-bold mb-4">Datos usuarios</h1>

                <table class="table-auto w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border">Número de Documento</th>
                            <th class="px-4 py-2 border">Tipo de Documento</th>
                            <th class="px-4 py-2 border">Nombre</th>
                            <th class="px-4 py-2 border">Apellido</th>
                            <th class="px-4 py-2 border">Teléfono</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usu)
                            <tr>
                                <td class="px-4 py-2 border">{{ $usu->NUMERO_DOC }}</td>
                                <td class="px-4 py-2 border">{{ $usu->TIPO_DOC }}</td>
                                <td class="px-4 py-2 border">{{ $usu->NOM_USER }}</td>
                                <td class="px-4 py-2 border">{{ $usu->APE_USER }}</td>
                                <td class="px-4 py-2 border">{{ $usu->TEL_USER }}</td>
                                <td class="px-4 py-2 border">{{ $usu->CORREO_USER }}</td>
                                <td class="px-4 py-2 border">{{ $usu->ROL_USER }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
