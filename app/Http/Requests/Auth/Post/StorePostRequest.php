<?php

namespace App\Http\Requests\Auth\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
                'title' => [
                    'required',
                    'string',
                    'min:3',
                    'max:50',
                    Rule::unique('posts', 'title')->ignore($this->post),
                ],
                'description' => ['required', 'string', 'min:8'],
                'category' => ['required'],
                'is_publish' => ['required', 'in:0,1'],
                'file' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:5120', 'dimensions:max_width=2160,max_height=2160']
            ];
    }


    public function attributes(): array
    {
        return [
            'is_publish' => 'status',
        ];
    }
}
