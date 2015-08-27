<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;

class UserRequest extends Request {

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
		$user = User::find($this->users);
		$value = "";

		if($this->get('type') == '2'){
			$value = 'required';
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
					'name' 								=> 	'required|min:5',
					'email'								=>	'required|unique:users,email',
					'password'							=>	'required',
					'type'								=>	'required',
					'establecimiento_id'				=>	$value

				];
	        }

	        case 'PUT':
	        case 'PATCH':
	        {	
	            return [
				//
					'name' 								=> 	'required|min:5',
					'email'								=>	'required|unique:users,email,'.$user->id,
					'type'								=>	'required',
					'establecimiento_id'				=>	$value

				];
	        }

	        default:break;
	    }
	}

}
