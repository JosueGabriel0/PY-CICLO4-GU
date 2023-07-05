<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabajoPostRequest extends FormRequest
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
            'tra_fecha_publicacion'=>'required',
            'tra_tipo'=>'required',
            'tra_categoria'=>'required',
            'tra_descripcion'=>'required',
            'tra_salario'=>'required',
            'tra_fecha_inicio'=>'required',
            'tra_fecha_fin'=>'required',
            'tra_requiere_experiencia'=>'required',
            'tra_datos_contacto'=>'required',
            'tra_modalidad_tiempo'=>'required',
            'tra_beneficios'=>'required',
            'tra_modalidad'=>'required',
            'tra_titulo'=>'required',
            'tra_antecedentes'=>'required',
            'tra_estado'=>'required',
            'tra_remunerado'=>'required',
            'ps_monto_remuneracion'=>'required',
            'tra_ep_id'=>'required',
        ];
    }
}
