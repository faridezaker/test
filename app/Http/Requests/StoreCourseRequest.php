<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
        return
            [
               // 'user_id' => ['required', 'integer', 'min:0', 'max:18446744073709551615'],
                'title' => ['required', 'string', 'min:1', 'max:255'],
                'body' => ['required', 'string', 'min:1'],
                'image' => ['required', 'string', 'min:1', 'max:255'],
                'price' => ['required', 'string', 'min:1', 'max:20']
            ];
    }
}
