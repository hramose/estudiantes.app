<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AsesorRequest;
use App\Http\Controllers\Controller;

use App\Asesor;
use App\Establecimiento;
use App\User;
use Illuminate\Http\Request;

class AsesorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$asesores = Asesor::orderBy('user_id','desc')
							->groupBy('user_id')
							->paginate();
		return view('asesores.index',compact('asesores'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$establecimientos = Establecimiento::lists('nombre','id');
		$users = User::lists('name','id');

		return view('asesores.create',compact('establecimientos','users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AsesorRequest $request)
	{
		//
		$asesor = Asesor::create($request->all());
		return redirect('asesores');
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
		$asesores = Asesor::with('establecimiento')->where('user_id','=',$id)->get();

		return view('asesores.show',compact('asesores'));
		//dd($asesores);
		
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
		$asesor = Asesor::with('establecimiento')->where('user_id','=',$id)->get();
		$users = User::lists('name','id');
		$establecimientos = Establecimiento::lists('nombre','id');

		//dd($asesor);
		return view('asesores.edit',compact('asesor','users','establecimientos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,AsesorRequest $request)
	{
		//
		$asesor = Asesor::find($id);
		$asesor->update($request->all());

		return redirect('asesores');
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
		$asesor = Asesor::find($id);
		$asesor->delete();

		return redirect('asesores');
	}

}
