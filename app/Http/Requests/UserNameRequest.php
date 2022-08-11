<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserNameRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2|max:50',
            'email'=>'required|email',
            'phone'=>'required|digits_between:11,14',
            'password'=>'required|min:8|max:20',
            'role'=>'required|required|digits_between:1,2',
            'status'=>'required|required|digits_between:0,1',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Enter Your First and Last name',
            'name.min' => 'First And Last Name Should atleast be 2 characters',
            'name.max' => 'First and last name cant be more than 50 characters',
            'phone.required' => 'Enter Your phone number',
            'phone.digits_between' => 'Phone number should be between 11 to 14 digits',
            'email.required' => 'Enter your email',
            'email.email' => 'Enter a valid email ',
            'password.required' => 'Enter a password',
            'password.min' => 'Password cant be less than 8 characters',
            'password.max' => 'Password ',
            'status.required' => 'وضعیت باید وارد شود',
            'status.digits_between' => 'وضعیت نمی تواند خارج از محدوده مجاز باشد',
            'role.required' => 'نقش باید وارد شود',
            'role.digits_between' => 'نقش نمی تواند خارج از محدوده مجاز باشد',  
        ];
    }
}
