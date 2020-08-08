<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryGalleryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if($this->method() == "post"){
            return [
                'title'=>'required',
                'images'=>'required|mimes:jpeg,png,bmp',
                'lang'=>'required',
                'description'=>'required',
            ];
        }
        return [
            'title'=>'required',
            'lang'=>'required',
            'description'=>'required',
        ];

    }
}
