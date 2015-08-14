<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PersonaRequest;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Response;

use Auth;
use App\Persona;
use App\Participante;
use App\Asesor;
use App\Establecimiento;
use App\GrupoInvestigacion;

use Illuminate\Http\Request;

class PersonaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)

	{
		//
		$personas = Persona::documento($request->get('documento'))->whereHas('participante',function($q){

			$q->whereHas('establecimiento',function($q){

				$q->whereHas('asesor', function($q){	
				
						$user = Auth::user();
						$q->where('user_id', $user->id);
		
				});
			});
		
		})->paginate();
		
		//dd($personas);
		return view('personas.index',compact('personas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//$asesores = Asesor::where('user_id',$user->id)->get();

		$establecimientos = Establecimiento::whereHas('asesor', function($q){
				
				$user = Auth::user();
				$q->where('user_id', $user->id);
		
		})->lists('nombre','id');
		
		return view('personas.create',compact('establecimientos'));
			
	}	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PersonaRequest $request)
	{
		//$persona = Persona::create($request->all());
		
		//create participante row
		$participante = new Participante(['establecimiento_id' => $request->establecimiento_id,'rol'=>$request->rol  ]);
		$persona = Persona::create($request->all());
		$participante = $persona->participante()->save($participante);

		if ($request->grupoInvestigacion_id != ""){
			//create investigador row
			$investigador = new Investigador(['grupoInvestigacion_id' => $request->grupoInvestigacion_id]);	
			$investigador = $participante->investigador()->save($investigador);
		}

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

		$establecimientos = Establecimiento::whereHas('asesor', function($q){
				
				$user = Auth::user();
				$q->where('user_id', $user->id);
		
		})->lists('nombre','id');

		return view('personas.edit',compact('persona','establecimientos'));

	}

	/*
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

	public function ajax_gi(Request $request)
	{
		$grupoInvestigaciones = GrupoInvestigacion::has('establecimiento',$request->get('ee_id'))->get()->toJson();
		return ($grupoInvestigaciones);

	}

}
