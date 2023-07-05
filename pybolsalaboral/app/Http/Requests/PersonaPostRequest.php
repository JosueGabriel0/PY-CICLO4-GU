<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ps_nombre'=>'required',
            'ps_paterno'=>'required',
            'ps_materno'=>'required',
            'ps_edad'=>'required',
            'ps_dni'=>'required',
            'ps_correo'=>'required',
            'ps_celular'=>'required',
            'ps_direccion'=>'required',
            'ps_estado_civil'=>'required',
            'ps_fecha_nacimiento'=>'required',
            'ps_sexo'=>'required',
            'ps_usuario'=>'required',
            'ps_password'=>'required',
            'ps_rol'=>'required',
        ];
    }
}
