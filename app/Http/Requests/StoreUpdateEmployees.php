<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEmployees extends FormRequest
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
            'employee_name' => 'required',
            'salary' => 'required',
            'admission' => 'required',
            'cpf' => 'required',
            'pis_pasep' => 'required',
            'ctps' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'place_of_birth' => 'required',
            'sex' => 'required',
            'job' => 'required',
            'sector' => 'required',
        ];
    }
}
