<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrediosRequest extends FormRequest
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
            
            'idFin' => 'required',
            'nombrePredio' => 'required',
            'numLote' => 'required',
            'superficie' => 'required',
            'regimenHumedad' => 'required',
            'tipRiego' => 'required',
            'latitud' =>'required',
            'longitud' =>'required',
            'altitud' =>'required',
            'observaciones' => 'required'
        ];
    }
}
