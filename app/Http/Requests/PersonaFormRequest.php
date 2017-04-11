<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class PersonaFormRequest extends Request
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
        	'nombre' =>'required|max:100',
        	'tipo_documento' =>'required|max:100',
        	'num_documento' =>'required|max:100',
        	'direccion' =>'required|max:100',
        	'telefono' =>'max:100',
        	'email' =>'max:100'    	
        ];
    }
}
