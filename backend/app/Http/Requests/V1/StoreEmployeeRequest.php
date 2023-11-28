<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'departmentId'=>['required'],
            'name' => ['required'],
            'email' => ['required','email'],
            'phone'=>['required'],
            'address'=>['required'],
            'achievements' => ['required', 'array'],
            'achievements.*.name' => ['required'],
            'achievements.*.date' => ['required', 'date'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'department_id' => $this->departmentId
        ]);
    }
}
