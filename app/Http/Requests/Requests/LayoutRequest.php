<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LayoutRequest extends FormRequest
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
          
            'nome_jogo'=> 'required|min:3|max:60',
            'texto_destaque' => 'required|min:30',
            'frase' => 'required|min:30',
            'descri_form' => 'required|min:60',
            'background' => 'image|mimes:jpg,jpeg,png|max:2080'
       
        ];
    }
    public function messages()
    {
        return [
           //'background.required' => 'Para prosseguir é necessario carregar uma imagem',
        ];
    }
}
