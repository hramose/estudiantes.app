<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PersonaRequest;
use App\Http\Controllers\Controller;

use Auth;
use App\Persona;
use App\Investigador;
use App\GrupoInvestigacion;
use App\Establecimiento;
use App\Asesor;

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
		$personas = Persona::documento($request->get('documento'))
					->whereHas('investigador',function($q){
						$q->whereHas('grupoInvestigacion',function($q){
							$q->whereHas('establecimiento',function($q){
								$q->whereHas('asesor', function($q){
									$user = Auth::user();
									$q->where('user_id', $user->id);
								});
							});
						});
					})->paginate();
	
		//foreach ($personas as $persona) {dd($persona->investigador->grupoInvestigacion->first()->nombre); }
		return view('personas.index',compact('personas'));
		//dd($personas);
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
		

		if ($request->tipo == "estudiante" || $request->tipo == "coinvestigador" || $request->tipo == "acompanante" ){
			$investigador = new Investigador([
				'grupoInvestigacion_id' => $request->grupoInvestigacion_id,
				'rol'					=> $request->rol,
				'grado'					=> $request->grado
				]);

			$persona = Persona::create($request->all());
			
			$investigador = $persona->investigador()->save($investigador);
			
		}else {
			//only create Persona
			$persona = Persona::create($request->all());
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
		$persona = Persona::with('investigador')->find($id);

		$establecimientos = Establecimiento::with('grupoInvestigacion')->whereHas('asesor', function($q){
			$user = Auth::user();
			$q->where('user_id', $user->id);
		})->lists('nombre','id');

		$grupoInvestigaciones = GrupoInvestigacion::where('establecimiento_id',$persona->establecimiento_id)->lists('nombre','id');
		
		//$establecimientosLists = $establecimientos->lists('nombre','id');

		return view('personas.edit',compact('persona','establecimientos','grupoInvestigaciones'));
		//dd($persona->investigador->grupoInvestigacion_id);
		
	}

	/*
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,PersonaRequest $request)
	{
		//

		$persona = Persona::with('investigador')->find($id);
	    $persona->fill($request->all());
	    $persona->investigador->fill([
			'grupoInvestigacion_id' => $request->grupoInvestigacion_id,
			'rol'					=> $request->rol,
			'grado'					=> $request->grado
			]);
	    $persona->push();

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
		$grupoInvestigaciones = GrupoInvestigacion::where('establecimiento_id',$request->ee_id)->get()->toJson();
		
		return ($grupoInvestigaciones);

	}

}
