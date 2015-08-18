<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Participante;

class ParticipanteRequest extends Request {

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
		$participante = Participante::find($this->participantes);
		$gi = $value = "";

		switch($this->get('tipo'))
        {
            case 'estudiante':
            {
                $gi = $value = 'required';
            }
            case 'coinvestigador':
            case 'acompanante':
            {
                $gi = 'required';
            }

            default:break;

        }

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
					'documento' 							=> 	'required|min:5|unique:participantes,documento',
					'nombre'								=>	'required|min:2',
					'apellido'								=>	'required|min:2',
					'sexo' 									=>	'required',
					'fechaNacimiento'						=>	'required|date',
					'tipo'									=>	'required',
		        	'establecimiento_id'					=>	'required',
		        	'grupoInvestigacion_id'					=>	$gi,
		        	'rol'									=>	$value,
		        	'grado'									=>	$value

				];
	        }

	        case 'PUT':
	        case 'PATCH':
	        {

	            return [
				//
					'documento' 							=> 	'required|min:5|unique:participantes,documento,'.$participante->id,
					'nombre'								=>	'required|min:2',
					'apellido'								=>	'required|min:2',
					'sexo' 									=>	'required',
					'fechaNacimiento'						=>	'required|date',
					'tipo'									=>	'required',
		        	'establecimiento_id'					=>	'required',
		        	'grupoInvestigacion_id'					=>	$gi,
		        	'rol'									=>	$value,
		        	'grado'									=>	$value

				];
	        }

	        default:break;
	    }
	
	}

}