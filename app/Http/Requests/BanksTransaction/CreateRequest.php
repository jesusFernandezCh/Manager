<?php

namespace App\Http\Requests\BanksTransaction;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'bank_id'   => 'required',
            'amount'   => 'required',
            'reference' => 'required',
            'date' => 'required',
            'type' => 'required',
        ];
    }
}