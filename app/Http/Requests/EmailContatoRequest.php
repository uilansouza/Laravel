<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmailContatoRequest extends Request
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
            'nome'=>'required|alpha|max:50',
            'email'=>'required|email',
            'mensagem'=>'required|max:255',
            'log'=>'mimes:txt'
        ];
    }
}
