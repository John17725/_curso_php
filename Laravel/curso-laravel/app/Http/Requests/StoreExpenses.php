<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenses extends FormRequest
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
            'description' => 'required|min:5',
            'amount' => 'required|min:1',
        ];
    }

    public function messages(){
        return [
            'description.required' => 'A description is required',
            'amount.required' => 'A mount is required',
        ];
    }
}
