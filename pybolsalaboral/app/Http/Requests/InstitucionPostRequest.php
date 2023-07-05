<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitucionPostRequest extends FormRequest
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
            'ins_num_cedes'=>'required',
            'ins_num_docentes'=>'required',
            'ins_anios_actividad'=>'required',
            'ins_num_estudiantes'=>'required',
            'ins_sitio_web'=>'required',
            'ins_nombre'=>'required',
            'ins_direccion'=>'required',
            'ins_correo'=>'required',
            'ins_celular'=>'required',
        ];
    }
}
