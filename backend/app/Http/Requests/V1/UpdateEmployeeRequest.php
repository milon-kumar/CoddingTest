<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        if ($this->method() == 'PUT'){
            return [
                'departmentId'=>['required'],
                'name' => ['required'],
                'email' => ['required','email'],
                'phone'=>['required'],
                'address'=>['required'],
            ];
        }else{
            return [
                'departmentId'=>['sometimes','required'],
                'name' => ['sometimes','required'],
                'email' => ['sometimes','required','email'],
                'phone'=>['sometimes','required'],
                'address'=>['sometimes','required'],
            ];
        }

    }

    protected function prepareForValidation()
    {
        $this->merge([
            'department_id' => $this->departmentId
        ]);
    }
}
