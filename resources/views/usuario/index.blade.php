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
                   
                    <p>
                        <a href="{{ route('usuario.create') }}">Nuevo</a>
                    </p>
                    @if (session('ok'))
                        <p style="color:green">{{ session('ok') }}</p>
                    @endif

                <table id="usuarios" class="display" style="width:100%">
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
                                <td>
                                    <a href="{{ route('usuario.edit', &usu) }}">Editar</a>
                                    <form action="{{ route('usuario.destroy', $usu) }}" method="POST"
                                        style="display:inline" onsubmit="return confirm('¿Eliminar?')">
                                        @csrf @method('DELETE')
                                        <button type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- jQuery + DataTables (CDN) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet"
    href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script>
        $(function() {
            $('#usuarios').DataTable({
                pageLength: 20,
                dom: 'Bfrtip',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</x-app-layout>