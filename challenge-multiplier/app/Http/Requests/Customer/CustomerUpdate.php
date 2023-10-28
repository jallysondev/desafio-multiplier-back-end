<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fantasy_name' => 'string|required',
            'cnpj' => 'string|required',
            'street_name' => 'string|required',
            'city' => 'string|required',
            'state' => 'string|required',
            'country' => 'string|required',
            'phone' => 'string|required',
            'email' => 'string|required|email',
            'cnae' => 'string|required',
            'corporate_structure' => 'string|nullable'
        ];
    }
}
