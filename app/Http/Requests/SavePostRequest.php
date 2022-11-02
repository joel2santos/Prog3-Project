<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // if ($this->method('PATCH')){
        //     return [
        //         'title' => ['min:8']
        //     ]
        // }
        return [
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ];
    }
}
