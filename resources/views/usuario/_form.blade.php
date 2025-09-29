{{-- Nombre --}}
<div>
    <label for="NOM_USER">Nombre</label>
    <input type="text" name="NOM_USER" id="NOM_USER"
        value="{{ old('NOM_USER', optional($usuario)->NOM_USER) }}" required>
</div>

{{-- Apellido --}}
<div>
    <label for="APE_USER">Apellido</label>
    <input type="text" name="APE_USER" id="APE_USER"
        value="{{ old('APE_USER', optional($usuario)->APE_USER) }}" required>
</div>

{{-- Tipo de documento --}}
<div>
    <label for="TIPO_DOC">Tipo de documento</label>
    <input type="text" name="TIPO_DOC" id="TIPO_DOC"
        value="{{ old('TIPO_DOC', optional($usuario)->TIPO_DOC) }}" required>
</div>

{{-- Número de documento --}}
<div>
    <label for="NUMERO_DOC">Número de documento</label>
    <input type="text" name="NUMERO_DOC" id="NUMERO_DOC"
        value="{{ old('NUMERO_DOC', optional($usuario)->NUMERO_DOC) }}" required>
</div>

{{-- Teléfono --}}
<div>
    <label for="TEL_USER">Teléfono</label>
    <input type="text" name="TEL_USER" id="TEL_USER"
        value="{{ old('TEL_USER', optional($usuario)->TEL_USER) }}" required>
</div>

{{-- Correo electrónico --}}
<div>
    <label for="CORREO_USER">Correo electrónico</label>
    <input type="email" name="CORREO_USER" id="CORREO_USER"
        value="{{ old('CORREO_USER', optional($usuario)->CORREO_USER) }}" required>
</div>

{{-- Rol --}}
<div>
    <label for="ROL_USER">Rol</label>
    <select name="ROL_USER" id="ROL_USER" required>
        <option value="">Seleccione un rol</option>
        <option value="Administrador" {{ old('ROL_USER', optional($usuario)->ROL_USER) == 'Administrador' ? 'selected' : '' }}>Administrador</option>
        <option value="Jefe de Patio" {{ old('ROL_USER', optional($usuario)->ROL_USER) == 'Jefe de Patio' ? 'selected' : '' }}>Jefe de Patio</option>
        <option value="Cliente" {{ old('ROL_USER', optional($usuario)->ROL_USER) == 'Cliente' ? 'selected' : '' }}>Cliente</option>
    </select>
</div>
