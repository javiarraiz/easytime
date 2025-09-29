<form action="{{ route('usuario.update', $usuario) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    @include('usuario._form', [
        'usuario' => $usuario,
    ])

    <div class="pt-4 flex gap-3">
        <button class="px-4 py-2 bg-blue-600 text-white rounded">Actualizar</button>
        <a href="{{ route('usuario.index') }}"
            class="px-4 py-2 border rounded">Cancelar</a>
    </div>
</form>