<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetPostRequest extends FormRequest
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
            'city'=>'required|min:3|max:25',
            'title'=>'required|min:3|max:20',
            'subtitle'=>'required|min:20|max:60',
            'description'=>'required|min:100|max:800',
            'petimage'=>'required|mimes:png,jpeg,jpg|max:200000'
            //
        ];
    }
}
