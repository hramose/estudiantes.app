<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\MunicipioRequest;
use App\Http\Controllers\Controller;


use App\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$municipios = Municipio::orderBy('nombre','asc')->paginate();

		return view('municipios.index',compact('municipios'));
		//return $municipios;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('municipios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MunicipioRequest $request)
	{
		//
		$municipio = Municipio::create($request->all());

		return redirect('municipios');
	}

	/**
	 * Display the specified resource.
	 *s
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
		$municipio = Municipio::find($id);

		return view('municipios.edit',compact('municipio'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, MunicipioRequest $request)
	{
		//
		$municipio = Municipio::find($id);
		$municipio->update($request->all());

		return redirect('municipios');

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

		$municipio = Municipio::find($id);
		$municipio->delete();

		return redirect('municipios');
	}

	public function ajax_mun(Request $request){

		$municipios = Municipio::where('ruta',$request->ruta)->get()->toJson();

		return ($municipios);

	}

}
