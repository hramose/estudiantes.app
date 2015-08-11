<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Persona;
use App\Participante;
use App\Establecimiento;
use App\GrupoInvestigacion;
use App\Investigador;

use Illuminate\Http\Request;

class ParticipanteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//$participantes = Participante::all();
		$participantes = Participante::orderBy('persona_id', 'asc')->groupBy('rol')->paginate();

		//return $participantes;
		return view('participantes.index',compact('participantes')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$personas				= Persona::lists('nombre','id');
		$establecimientos 		= Establecimiento::lists('nombre','id');
		$grupoInvestigaciones 	= GrupoInvestigacion::lists('nombre','id');


		//return $grupoInvestigaciones;
		return view('participantes.create',compact('personas','establecimientos','grupoInvestigaciones'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//	
		$investigador = new Investigador(['grupoInvestigacion_id' => $request->grupoInvestigacion_id]);
		$participante = Participante::create($request->all());
		$investigador = $participante->investigador()->save($investigador);

		//return $request->all();
		return redirect('participantes');
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
		$participante  		= Participante::find($id);
		$establecimientos 	= Establecimiento::lists('nombre','id');
		$grupoInvestigaciones 	= GrupoInvestigacion::lists('nombre','id');

		return view('participantes.edit',compact('participante','establecimientos','grupoInvestigaciones'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$participante = Participante::find($id);
		$participante ->update($request->all());

		return redirect('participantes');

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
	}

}
