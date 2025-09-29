<form action="{{ route('usuario.store') }}" method="POST" class= "space-y-6">
    @csrf
    @include('usuario._form', [
        'usuario' => null,
    ])

    <div class="pt-4 flex gap-3">
        <button
            class="focus:outline-non text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300
            font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-
            800">Guardar
        
        </button>
        <a href="{{ route('usuario.index') }}"
        class="px-4 py-2 border rounded">Cancelar
        </a>
    </div>
</form>
