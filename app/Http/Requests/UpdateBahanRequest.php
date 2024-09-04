<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBahanRequest extends FormRequest
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
        $materialId = $this->route('material');

        return [
            'name' => [
                'required',
                'string',
                Rule::unique('materials', 'name')->ignore($materialId, 'id')
            ],
            'type' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kolom Nama wajib diisi.',
            'name.string' => 'Nilai harus berupa string.',
            'name.unique' => 'Nama bahan sudah digunakan.',
            'type.required' => 'Kolom Nama wajib diisi.',
            'type.string' => 'Nilai harus berupa string.',
        ];
    }
}
