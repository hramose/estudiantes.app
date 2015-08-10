<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PersonaRequest;
use App\Http\Controllers\Controller;

use App\Persona;
use App\Participante;
use App\Establecimiento;
use Illuminate\Http\Request;

class PersonaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$personas = Persona::orderBy('documento','asc')->paginate();

		//$personas = Persona::first();

		return view('personas.index',compact('personas'));
		//return $personas->hert ;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//$establecimientos 		= [''=>''] + Establecimiento::lists('nombre','id');

		//return $grupoInvestigaciones;
		return view('personas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PersonaRequest $request)
	{
		//$participante = new Participante(['establecimiento_id' => $request->establecimiento_id,'rol'=>$request->rol  ]);

		$persona = Persona::create($request->all());

		//$participante = $persona->participante()->save($participante);

		return redirect('personas');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$persona = Persona::find($id);

		return view('personas.edit',compact('persona'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PersonaRequest	$request)
	{
		//
		$persona = Persona::find($id);
		$persona->update($request->all());

		return redirect('personas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$persona = Persona::find($id);
		$persona->delete();

		return redirect('personas');
	}

}
