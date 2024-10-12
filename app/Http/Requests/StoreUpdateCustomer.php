<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCustomer extends FormRequest
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
            'customer' => 'required',
            'email' => 'required',
            'type_of_person' => 'required',
            'address' => 'required',
            'cnpj' => 'required',
            'cpf' => 'required',
            'cep' => 'required',
            'telephone' => 'required',
        ];
    }
}
