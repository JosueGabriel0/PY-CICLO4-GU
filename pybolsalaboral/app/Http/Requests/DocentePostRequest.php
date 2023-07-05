<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocentePostRequest extends FormRequest
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
            'dc_grado_academico'=>'required',
            'dc_anios_trabajo'=>'required',
            'dc_especialidad'=>'required',
            'dc_grado_estudios'=>'required',
            'dc_ps_id'=>'required',
        ];
    }
}
