<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'          =>  'required',
            'logo'          =>  'required|max:500|mimes:jpeg,jpg,png,gif',
        ];
    }

    public function messages()
    {
        return[
            'name.required'      => "Name is required.",
            'logo.max'            => "Logo Size should be less than 500KB",
            'logo.mimes'          => "Extension is not valid."
        ];
    }
}
