<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FincasRequest extends FormRequest
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
            'nomfinca' => 'required',
            'domfinca' => 'required',
            'telfinca' => 'required',
            'ciudad'   => 'required',
            'estado'   => 'required',
            'us_id'    => 'required'
        ];
    }
}
