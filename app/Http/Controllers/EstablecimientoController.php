<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\EstablecimientoRequest;
use App\Http\Controllers\Controller;

use App\Establecimiento;
use App\Municipio;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$establecimientos = Establecimiento::orderBy('nombre','asc')->paginate();
		return view('establecimientos.index',compact('establecimientos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$municipios = [''=>''] + Municipio::lists('nombre','id');
		return view('establecimientos.create',compact('municipios'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EstablecimientoRequest $request)
	{
		//
		$establecimiento = Establecimiento::create($request->all());

		return redirect('establecimientos');
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
		$establecimiento = Establecimiento::find($id);
		$municipios = Municipio::lists('nombre','id');


		return view('establecimientos.edit',compact('establecimiento','municipios'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EstablecimientoRequest $request)
	{
		//
		$establecimiento = Establecimiento::find($id);
		$establecimiento->update($request->all());

		return redirect('establecimientos');
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
		$establecimiento = Establecimiento::find($id);
		$establecimiento->delete();

		return redirect('establecimientos');
	}

}
