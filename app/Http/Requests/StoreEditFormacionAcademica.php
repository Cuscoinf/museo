<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Validation\Rule;

class StoreEditFormacionAcademica extends FormRequest
{
    protected $route;

    /*public function __construct(Route $route)
    {
        $this->route=$route;
        //dd($this->route->parameter('formacion_academica'));
    }
    */
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
            'gradoAcademico'=>['required',
                                Rule::unique('formacion_academica', 'gradoAcademico')->ignore($this->formacion_academica)
        ],
            'universidad'=>'required',
            'pais'=>'required',
            'añoTitulacion'=>'required'

        ];
    }
}
