<?php

namespace App\Http\Requests\Auth\Post;

use Illuminate\Foundation\Http\FormRequest;

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
                'title' => ['required', 'string', 'min:3', 'max:50', 'unique:posts,title'],
                'description' => ['required', 'string', 'min:8'],
                'category' => ['required'],
                'status' => ['required', 'in:0,1'],
                'file' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048', 'dimensions:max_width=1080,max_height=1080']
                // 'user_id' => ['required', 'exists:users,id'],
            ];
    }
}