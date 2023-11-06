<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'bail|required|string|min:3|max:50',
            'price' => 'bail|required|string|min:1|max:10',
            'description' => 'bail|nullable|string',
            'series' => 'bail|nullable|string',
            'sale_date' => 'bail|nullable|date',
            'type' => 'bail|nullable|string|max:50',
            'artists' => 'bail|nullable|string',
            'writers' => 'bail|nullable|string',
        ];
    }
}
