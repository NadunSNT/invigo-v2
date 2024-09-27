<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'company_name' => 'sometimes|string|max:100', // Use 'sometimes' for optional updates
            'company_contact' => 'sometimes|string|max:20',
            'company_email' => 'sometimes|string|email|max:100', 
            'company_address' => 'sometimes|string|max:200',
            'company_logo' => 'sometimes|string|max:50',
            'additional_details' => 'sometimes|string',
            'status' => 'sometimes|string', 
            // 'company_type' is intentionally excluded so it cannot be updated
        ];
    }
}
