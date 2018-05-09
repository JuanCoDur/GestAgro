<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaquinariaRequest extends FormRequest
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
            'idFiinc'    => 'required',
            'idmarc'     => 'required',
            'Combustible'=> 'required',
            'Rendimiento'=> 'required',
            'ModeloMaq'  => 'required',
            'yearFabricacion' => 'required',
            'Adepreciacion' => 'required',
            'ValorActMaq'   => 'required',
            'Unidad'   => 'required',
            'noSerieMotor'   => 'required'
        ];
    }
}
