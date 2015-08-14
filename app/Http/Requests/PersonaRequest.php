<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonaRequest extends Request {

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
		$gi = "";
		$value = "";

		if(Request::get('tipo') == "estudiante"){

            $gi = 'required';
            $value = 'required';

		} else if(Request::get('tipo') == "coinvestigador" OR Request::get('tipo') == "acompanante"){
            $gi = 'required';
        }

		return [
			//
			'documento' 			=> 	'required|min:5|unique:personas',
			'tipoDocumento' 		=>	'required',
			'nombre'				=>	'required|min:2',
			'apellido'				=>	'required|min:2',
			'sexo' 					=>	'required',
			'fechaNacimiento'		=>	'required',
			'tipo'					=>	'required',
        	'establecimiento_id'	=>	'required',
        	'grupoInvestigacion_id'	=>	$gi,
        	'rol'					=>	$value,
        	'grado'					=>	$value

		];
	
	}

}
