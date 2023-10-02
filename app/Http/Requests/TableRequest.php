<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TableRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:5'] ,
            'description' => ['required' , 'max:10'] ,
        ] ;
    }

    public function attributes()
    {
        return [
           'name' => 'anun' ,
           'description' => 'bnutagir'
        ] ;
    }

    public function messages()
    {
        return [
            'name.required' => 'anva dashty partadir e' ,
            'name:min' => 'arnvazn 5 nish' ,
            'description.required' => 'lracru exbayr' ,
        ] ;
    }
}
