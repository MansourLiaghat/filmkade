<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateVideoRequest extends storeVideosRequest
{
    public function rules()
    {
        return array_merge(parent::rules(),[
            
            'slug' => ['required' , Rule::unique('Videos')->ignore($this->video) , 'alpha_dash'],
            
        ]);
    }
}
