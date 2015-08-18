<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ParticipanteRequest;
use App\Http\Controllers\Controller;

use Auth;
use App\Participante;
use App\Investigador;
use App\GrupoInvestigacion;
use App\Establecimiento;
use App\Asesor;

use Illuminate\Http\Request;

class ParticipanteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)

	{
		//
		$participantes = Participante::documento($request->get('documento'))
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
		return view('participantes.index',compact('participantes'));
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
		
		return view('participantes.create',compact('establecimientos'));
			
	}	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ParticipanteRequest $request)
	{
		//$persona = Persona::create($request->all());
		

		if ($request->tipo == "estudiante" || $request->tipo == "coinvestigador" || $request->tipo == "acompanante" ){
			$investigador = new Investigador([
				'grupoInvestigacion_id' => $request->grupoInvestigacion_id,
				'rol'					=> $request->rol,
				'grado'					=> $request->grado
				]);

			$participante = Participante::create($request->all());
			$investigador = $participante->investigador()->save($investigador);
			
		}else {
			//only create Persona
			$participante = Participante::create($request->all());
		}

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
		$participante = Participante::with('investigador')->find($id);

		$establecimientos = Establecimiento::with('grupoInvestigacion')->whereHas('asesor', function($q){
			$user = Auth::user();
			$q->where('user_id', $user->id);
		})->lists('nombre','id');

		$grupoInvestigaciones = GrupoInvestigacion::where('establecimiento_id',$persona->establecimiento_id)->lists('nombre','id');
		

		return view('participantes.edit',compact('participante','establecimientos','grupoInvestigaciones'));
		//dd($persona->investigador->grupoInvestigacion_id);
		
	}

	/*
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ParticipanteRequest $request)
	{
		//

		$participante = Participante::with('investigador')->find($id);
	    $participante->fill($request->all());
	    $participante->investigador->fill([
			'grupoInvestigacion_id' => $request->grupoInvestigacion_id,
			'rol'					=> $request->rol,
			'grado'					=> $request->grado
			]);
	    $participante->push();

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
		$participante = Participante::find($id);
		$participante->delete();

		return redirect('participantes');
	}


}
