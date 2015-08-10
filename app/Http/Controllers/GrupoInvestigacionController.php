<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GrupoInvestigacionRequest;
use App\Http\Controllers\Controller;

use App\GrupoInvestigacion;
use App\Establecimiento;
use Illuminate\Http\Request;

class GrupoInvestigacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$grupo_investigaciones = GrupoInvestigacion::orderBy('nombre','asc')->paginate();
		return view('grupo_investigaciones.index',compact('grupo_investigaciones'));
		//return $grupo_investigaciones;	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$establecimientos = [''=>''] + Establecimiento::lists('nombre','id');
		return view('grupo_investigaciones.create',compact('establecimientos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GrupoInvestigacionRequest $request)
	{
		//
		$grupo_investigaciones = GrupoInvestigacion::create($request->all());
		return redirect('grupo_investigaciones');
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
		$grupo_investigacion = GrupoInvestigacion::find($id);
		$establecimientos = Establecimiento::lists('nombre','id');


		return view('grupo_investigaciones.edit',compact('grupo_investigacion','establecimientos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, GrupoInvestigacionRequest $request)
	{
		//
		$grupo_investigacion = GrupoInvestigacion::find($id);
		$grupo_investigacion->update($request->all());

		return redirect('grupo_investigaciones');
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
		$grupo_investigacion = GrupoInvestigacion::find($id);
		$grupo_investigacion->delete();

		return redirect('grupo_investigaciones');
	}

}
