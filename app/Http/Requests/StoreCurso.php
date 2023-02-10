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
        // return false;
        // se cambia a true para que no solicite login y pase al metodo rules
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

    public function rules()
    {
        // se aplican reglas de validacion del formulario de vista cursos.create
        return [
            'title' => 'required',
            'description' => 'required',
            'categoria'=>'required'
        ];
    }
}
