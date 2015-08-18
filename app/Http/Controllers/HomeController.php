<?php namespace App\Http\Controllers;

use App\Participante;
use App\GrupoInvestigacion;
use App\Establecimiento;
use App\Municipio;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		// $participantes = Participante::all()->count();
		// $grupoInvestigaciones = GrupoInvestigacion::all()->count();
		// $establecimientos = Establecimiento::all()->count();
		// $municipios = Municipio::all()->count();



		// return view('home',compact('participantes','grupoInvestigaciones','establecimientos','municipios'));

		return redirect('participantes');
	}

}
