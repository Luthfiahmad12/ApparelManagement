<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBahanRequest extends FormRequest
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
            'name' => 'required|string',
            'type' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kolom Nama wajib diisi.',
            'name.string' => 'Nilai harus berupa string.',
            'type.required' => 'Kolom Nama wajib diisi.',
            'type.string' => 'Nilai harus berupa string.',
        ];
    }
}
