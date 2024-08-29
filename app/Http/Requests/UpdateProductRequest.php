<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
        $productId = $this->route('product'); //ambil parameter dari route

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products', 'name')->ignore($productId, 'id')
            ],
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'price' => 'required|integer',
            'description' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kolom nama produk wajib diisi.',
            'name.string' => 'Kolom nama produk wajib berupa teks.',
            'name.max' => 'Nama produk tidak boleh lebih dari 255 karakter.',
            'name.unique' => 'Nama produk sudah digunakan.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar produk harus memiliki format: png, jpg, atau jpeg.',
            'image.max' => 'Ukuran gambar produk tidak boleh lebih dari 2MB.',
            'price.required' => 'Kolom harga produk wajib diisi.',
            'price.integer' => 'Kolom harga produk wajib berupa angka.',
        ];
    }
}
