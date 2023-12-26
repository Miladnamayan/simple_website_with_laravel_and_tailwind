<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // return [
        //     'email' => 'required|email|max:255|unique:users,email',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|unique:users,image',
        //     'name' => 'required|string|min:4|max:20',
        //     'password' => 'required|confirmed|min:8'
        // ];با این کار سشن پر نمیشه
        switch ($this->method()) {
            case 'POST':
                return [
                   'email' => 'required|email|max:255|unique:users,email'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|unique:users,image',
                   'name' => 'required|string|min:4|max:20',
                   'password' => 'required|confirmed|min:8'
                ];
            default:
                return [];
        }

      
    }
}
