<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre del Curso',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Debe ingresar una Descripción para el Curso',
        ];
    }
}
