<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditInvestigador extends FormRequest
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
            'nombre'=>'required',
            'apPaterno'=>'required',
            'apMaterno'=>'required',
            'tipoUsuario'=>'required',
            'email'=>'required',
            'tipoDocumento'=>'required',
            'nroDocumento'=>'required',
            'pais'=>'required',
            'genero'=>'required',
            'estado'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'formacion_academica_id'=>'required',
            'area_id'=>'required'
        ];
    }
}
