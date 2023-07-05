<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulacionPostRequest extends FormRequest
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
            'pos_ruta_cv'=>'required',
            'pos_puntaje'=>'required',
            'pos_estado'=>'required',
            'pos_eg_id'=>'required',
            'pos_tra_id'=>'required',
        ];
    }
}
