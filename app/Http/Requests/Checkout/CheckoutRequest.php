<?php

namespace App\Http\Requests\Checkout;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'name' => 'required|max:25|min:3|string',
            'surname' => 'required|max:25|min:3|string',
            'email' => 'required|max:250|min:7|email',
            'phone' => 'required|max:15|min:8|string',
            'payment_type' => 'required|string'
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Name required!',
            'name.string'  => 'Name is wrong!',
            'name.min'  => 'Name is too short!',
            'name.max'  => 'Name is too long!',

            'surname.required'  => 'Surname required!',
            'surname.string'  => 'Surname is wrong!',
            'surname.min'  => 'Surname is too short!',
            'surname.max'  => 'Surname is too long!',

            'email.required'  => 'Email required!',
            'email.email'  => 'Email is wrong!',
            'email.min'  => 'Email is too short!',
            'email.max'  => 'Email is too long!',

            'phone.required'  => 'Phone required!',
            'phone.string'  => 'Phone is wrong!',
            'phone.min'  => 'Phone is too short!',
            'phone.max'  => 'Phone is too long!',

            'payment_type.required'  => 'Payment type required!',
            'payment_type.string'  => 'Payment type is wrong!'
        ];
    }
}
