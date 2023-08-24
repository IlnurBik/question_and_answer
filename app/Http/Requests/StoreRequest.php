<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'question' => "required|unique:questions|max:255",
            'answer' => "required",
            'margin_top' => "required",
            'margin_bottom' => "required",
        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'Это поле необходимо заполнить',
            'answer.required' => 'Это поле необходимо заполнить',

        ];
    }
}
