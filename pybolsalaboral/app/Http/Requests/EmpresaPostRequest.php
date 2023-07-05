<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaPostRequest extends FormRequest
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
            'ep_rubro'=>'required',
            'ep_anios_actividad'=>'required',
            'ep_num_trabajadores'=>'required',
            'ep_num_cedes'=>'required',
            'ep_sitio_web'=>'required',
            'ep_nombre'=>'required',
            'ep_direccion'=>'required',
            'ep_correo'=>'required',
            'ep_celular'=>'required',
        ];
    }
}
