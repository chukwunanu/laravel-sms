<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolRequest extends FormRequest
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
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'po_box' => 'nullable|integer',
            'email' => 'required|email|unique:schools,email,' . $this->school->id,
            'phone' => 'required|string|max:11|min:11|unique:schools,phone,' . $this->school->id,
            'principal_name' => 'required|string|max:255',
            'vice_principal_name' => 'nullable|string|max:255',
        ];
    }
}
