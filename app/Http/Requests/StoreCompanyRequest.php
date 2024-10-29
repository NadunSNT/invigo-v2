<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'company_name' => 'required|string|max:100',
            'company_contact' => 'required|string|max:20',
            'company_email' => 'required|string|email|max:100',
            'company_address' => 'nullable|string|max:200',
            'company_logo' => 'nullable|string|max:50',
            'company_type' => 'required|in:company,branch,department',
            'additional_details' => 'nullable|string',
            'status' => 'nullable|string',
        ];
    }
}
