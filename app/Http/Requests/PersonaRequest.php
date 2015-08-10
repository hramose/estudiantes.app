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
		return [
			//
			'documento' 			=> 	'required|min:5',
			'tipoDocumento' 		=>	'required',
			'nombre'				=>	'required|min:2',
			'apellido'				=>	'required|min:2',
			'fechaNacimiento'		=>	'required'

		];
	}

}
