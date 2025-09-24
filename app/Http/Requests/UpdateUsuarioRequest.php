<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('usuario')->NUMERO_DOC;
        return [
            'NUMERO_DOC'    => 'required|string|max:25|unique:usuario,NUMERO_DOC',
            'TIPO_DOC'	    => 'required|string|max:25',
            'NOM_USER'	    => 'required|string|max:25',
            'APE_USER'	    => 'required|string|max:25',
            'TEL_USER'	    => 'required|string|max:20',
            'CORREO_USER'   => ['required','email',Rule::unique('usuario', 'CORREO_USER')->ignore($id, 'NUMERO_DOC')]
        ];
    }

    public function messages()
    {
        return [
            'NUMERO_DOC.required'   => 'Número de documento requirido',
            'NUMERO_DOC.unique'    => 'El número de documento ya está registrado.',
            'NOM_USER.required'     => 'Nombre requerido',
            'NOM_USER.max'         => 'Solo se permite 20 caracteres.',
        ];
    }
}
