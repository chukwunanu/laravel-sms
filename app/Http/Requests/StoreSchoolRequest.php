<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
            'school_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:20',
            'po_box' => 'nullable|integer',
            'phone' => 'required|string|min:11|max:11|unique:schools,phone',
            'email' => 'required|email|max:255|unique:schools,email',
            'principal_name' => 'required|string|max:255',
            'vice_principal_name' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'school_name.required' => 'The school name is required.',
            'address.required' => 'The address is required.',
            'city.required' => 'The city is required.',
            'state.required' => 'The state is required.',
            'po_box.integer' => 'The P O Box must be a number.',
            'phone.required' => 'The phone number is required.',
            'phone.unique' => 'The phone number has already been taken.',
            'phone.max' => 'The phone number must not be greater than 11 digits.',
            'email.required' => 'The email address is required.',
            'email.unique' => 'The email address has already been taken.',
            'principal_name.required' => 'The principal name is required.',
        ];
    }
}