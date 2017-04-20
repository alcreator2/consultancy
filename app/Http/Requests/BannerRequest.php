<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name'        =>  'required',
            'path'        =>  'required|max:1000|mimes:jpeg,jpg,png,gif',
            'which_page'  => 'required'  
        ];
    }

    public function messages()
    {
        return[
            'name.required'    => "Name is required.",
            'which_page'       => "Page is required.",
            'path.max'         => "Banner size should be less than 1000KB",
            'path.mimes'       => "Extension is not valid."
        ];
    }
}
