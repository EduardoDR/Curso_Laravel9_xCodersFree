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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required',
        ];
    }

    //Cambiar el nombre del Atributo que se menciona en la alerta, de "name" a "Nombre del curso"
    public function attributes()
    {
        return [
            'name' => 'Nombre del curso',
            
        ];
    }

    //Personalizar los mensajes en cada Alerta
    public function messages()
    {
        return[
            'descripcion.required' => 'Debe ingresar una descripción del curso',
            'descripcion.min:10' => 'Escribe algo más largo de texto',
        ];
    }
}
