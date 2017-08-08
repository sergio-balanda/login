<?php

namespace log\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminFormRequest extends FormRequest
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
            'name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|string|email|max:255|unique:users,id'.$this->get('id'),
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
