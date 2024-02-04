<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'catalog_id' => 'required',
            'brand_id' => 'required',
            'content' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'img' => 'required',
            'status' => 'required'
        ];
    }
}
