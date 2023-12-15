<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class storeVideosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'thumbnail' => ['required'],
            'slug' => ['required' , 'alpha_dash'],
            'description' => ['required'],
            'category_id' => ['required' , 'exists:categories,id'],
            'file' => ['required' , 'file' , 'mimetypes:video/mp4']
        ];
    }

    protected function prepareForValidation(): void
    {
    $this->merge([
        'slug' => Str::slug($this->slug),
    ]);
    }

    public function messages()
    {
return[
    'file.*' => 'فایل باید با پسوند mp4 باشد'
];
    }
}
