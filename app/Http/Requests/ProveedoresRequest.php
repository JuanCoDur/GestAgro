<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedoresRequest extends FormRequest
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
            'RFCProv'    => 'required',
            'nomProv'    => 'required',
            'domProv'    => 'required',
            'telProv'    => 'required',
            'emailProv'    => 'required',
            'empresaProv'    => 'required'

        ];
    }
}
