<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PozosRequest extends FormRequest
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
            'idFiin' => 'required',
            'pozo' => 'required',
            'medidor' => 'required',
            'ubicacionPzo' => 'required',
            'latitud' =>'required',
            'longitud' =>'required',
            'altitud' =>'required'
        ];
    }
}
