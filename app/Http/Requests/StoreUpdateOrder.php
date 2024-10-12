<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateOrder extends FormRequest
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
            'person' => 'required',
            'product_name' => 'required|string|max:1000|min:3',
            'quantity' => 'required|string|max:100|min:1',
            'delivery_time' => 'required|string',
            'priority' => 'required|string|max:15|min:3',
            'observations' => 'required|string|max:255|min:3',
        ];
    }
}
