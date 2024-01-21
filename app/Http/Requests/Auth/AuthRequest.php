<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            // 'email'=>'required | exist:users,email',
            // 'password'=>'required'
            'email' => ['required', 'exists:users,email'],
            // 'email' => ['required', 'exists:users, email'], email không viết cách ra, PHP phân biệt hoa, thường và dấu cách.
            'password' =>'required'
        ];
    }
}
