<?php

namespace sisPersonal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoFormRequest extends FormRequest
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
            //No son de la BD sino para el html
            'idempleado'=>'required|max:8',
            'emp_nombre'=>'required|max:45',
            'emp_appaterno'=>'required|max:45',
            'emp_apmaterno'=>'required|max:45',
            'emp_civil'=>'required|max:15',
            'emp_telefono'=>'max:9',
            'emp_nacimiento'=>'required',
            'emp_sexo'=>'required|max:1',
            'emp_direccion'=>'required|max:45',
            'emp_foto'=>'max:45',
            //'estado'=>'required|max:10',
            
            
            
        ];
    }
}
