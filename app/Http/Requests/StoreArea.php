<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArea extends FormRequest
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
            'nombre'=>'required|max:20|unique:area,nombre'
        ];
    }

    /*personaliazar mensajes de error*/
    /*funcion para personalizar al atributo a validar*/
    public function attributes()
    {
        return [
            'nombre'=>'Nombre del area'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Ingrese un Nombre'
        ];
    }
}
