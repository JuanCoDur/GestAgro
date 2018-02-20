<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
            
            'fin_id' => 'required',
            'nomemp' => 'required',
            'edademp' => 'required',
            'edocivil' => 'required',
            'depmenor' => 'required',
            'depmayor' => 'required',
            'discapacidades' => 'required',
            'domemp' => 'required',
            'telcasa' => 'required',
            'celemp' => 'required',
            'email' => 'required',
            'preparacion' => 'required',
            'sueldonto' => 'required',
            'cargo' => 'required',
            'jefedirecto' => 'required',
            'subordinados' => 'required'

        ];
    }
}
