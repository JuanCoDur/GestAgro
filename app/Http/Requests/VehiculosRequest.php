<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculosRequest extends FormRequest
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
            'idTipoV'    => 'required',
            'idFinca'    => 'required',
            'idmarc'     => 'required',
            'Marca'      => 'required',
            'Combustible'=> 'required',
            'Rendimiento'=> 'required',
            'ModeloVeh'  => 'required',
            'yearFabricacion' => 'required',
            'Adepreciacion' => 'required',
            'ValorActVeh'   => 'required',
            'Placa' => 'required'

        ];
    }
}
