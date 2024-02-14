<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:8|confirmed',
            'userName' => 'required|min:3|unique:students',
            'classStudy_id' => 'required',
            'gender' => 'required|string',
            'dateOfBirth' => 'required|date',
            'studentIdentity' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
            'fatherName' => 'required|string|min:3',
            'motherName' => 'required|string|min:3',
            'contactNumber' => 'required',
            'alternateNumber' => 'required',
            'address' => 'required|string|min:3',
        ];
    }
}
