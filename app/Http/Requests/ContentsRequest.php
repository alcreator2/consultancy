<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentsRequest extends FormRequest
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
        return [
            'title'         =>  'required',
            'which_page'    =>  'required',
            'cover_image'   =>  'max:1000|mimes:jpeg,jpg,png,gif',
            'thumbnail_image'   =>  'max:1000|mimes:jpeg,jpg,png,gif',
        ];
    }

    public function messages()
    {
        return[
            'title.required'                 => "Title is required.",
            'thumbnail_image.max'            => 'Cover Image Size should be less than 1000KB',
            'thumbnail_image.mimes'          => "Extension is not valid."
            'cover_image.max'                => 'Cover Image Size should be less than 1000KB',
            'cover_image.mimes'              => "Extension is not valid."
        ];
    }
}
