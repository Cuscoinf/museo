<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormacionAcademica extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*en false para aurozaaciones*/
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
            'gradoAcademico'=>'required|unique:formacion_academica,gradoAcademico',
            'universidad'=>'required',
            'pais'=>'required',
            'añoTitulacion'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'gradoAcademico.required'=>'message Ingrese un Nombre'
        ];
    }
}
