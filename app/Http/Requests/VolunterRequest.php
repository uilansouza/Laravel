<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VolunterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // deixar true para  nao ter restrição de envio de qualquer usuario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {  //Validação de formulário
        return [
               'name'=>'required|',
                'email'=>'required|email'
            
        ];
    
    }
}
