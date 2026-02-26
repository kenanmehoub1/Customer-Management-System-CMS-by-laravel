<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{
    /**
    * Determine if the admn is authorized to make this request.
    */
    public function authorize(): bool
    {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */
    public function rules(): array
    {
        return [
            'name' =>
            'required|string|regex:/^[\p{L}]+(?:\s[\p{L}]+)+$/u',
            'email' =>'required',
          //  'required|email|string|unique:admins,email',
            'phone_number' =>'required',
         //   'required|numeric|digits:10|unique:admins',
            'profile_photo' =>
            'nullable|image|mimes:jpeg,png,jpg,gif|max:16384',
            'password' =>'required',
           // 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[@#$&?!*]/|regex:/[0-9]/',
         //   'password_confirmation' =>
        //    'required|same:password'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Full name is required.',
            'name.string' => 'Full name must be a string.',
            'name.regex' => 'Full name must consist of at least two words.',

            'email.required' => 'Email address is required.',
            'email.email' => 'Email address must be a valid email format.',
            'email.string' => 'Email must be a string.',
            'email.unique' => 'This email is already taken.',

            'phone_number.required' => 'Phone number is required.',
            'phone_number.numeric' => 'Phone number must be numeric.',
            'phone_number.digits' => 'Phone number must consist of 10 digits.',
            'phone_number.unique' => 'This phone number is already taken.',

            'profile_photo.image' => 'Profile photo must be an image.',
            'profile_photo.mimes' => 'Profile photo must be a file of type: jpeg, png, jpg, gif.',
            'profile_photo.max' => 'Profile photo may not be greater than 2MB.',

            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.regex' => 'Password must contain at least one lowercase letter, one uppercase letter, one special character, and one number.',

            'password_confirmation.required' => 'Password confirmation is required.',
            'password_confirmation.same' => 'Password confirmation must match the password.',
        ];
    }
}