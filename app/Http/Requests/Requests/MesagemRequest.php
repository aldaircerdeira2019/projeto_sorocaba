<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MesagemRequest extends FormRequest
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
            'nome_contato'=> 'required|min:3|max:60',
            'email_contato' => 'required|min:3|max:60',
            'mensagem' => 'required|min:30|max:300',     
        ];
    }
}
