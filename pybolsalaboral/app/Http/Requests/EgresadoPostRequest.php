<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EgresadoPostRequest extends FormRequest
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
            'eg_codigo'=>'required',
            'eg_anios_experiencia'=>'required',
            'eg_ruta_cv'=>'required',
            'eg_religion'=>'required',
            'eg_especialidad'=>'required',
            'eg_nivel_academico'=>'required',
            'eg_ps_id'=>'required',
            'eg_ins_id'=>'required',
        ];
    }
}
