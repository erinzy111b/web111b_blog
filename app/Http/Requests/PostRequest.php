<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
        ];
        // return [
        //     'title' => 'required|max:10',
        //     'price' => 'required|numeric|min:0',
        //     // numeric數值/integer整數
        //     'desc' => 'max:200',
        // ];
    }
}