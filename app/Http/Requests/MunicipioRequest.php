<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Municipio;


class MunicipioRequest extends Request {

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
		$municipio = Participante::find($this->municipios);

		switch($this->method())
	    {
	        case 'GET':
	        case 'DELETE':
	        {
	            return [];
	        }
	        case 'POST':
	        {

	            return [
				//
					'nombre' 	=> 'required|min:3|unique:municipios,nombre',
					'ruta' 		=> 'required'

				];
	        }

	        case 'PUT':
	        case 'PATCH':
	        {

	            return [
				//
					'nombre' 	=> 'required|min:3|unique:municipios,nombre,'.$municipio->id,
					'ruta' 		=> 'required'

				];
	        }

	        default:break;
	    }
	}

}
