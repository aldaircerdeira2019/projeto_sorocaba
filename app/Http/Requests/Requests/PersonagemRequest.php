<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonagemRequest extends FormRequest
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
          
            'nome_personagem'=> 'required|min:3|max:60',
            'descri_personagem' => 'required|min:30',
            'avatar' => 'required|image|mimes:jpg,jpeg,png|max:700'
       
        ];
    }
}
