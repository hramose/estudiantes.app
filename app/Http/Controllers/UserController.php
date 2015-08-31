<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\User;
use App\Asesor;
use App\Establecimiento;

use Illuminate\Http\Request;

class UserController extends Controller {

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
	public function index(Request $request)
	{
		//
		$users = User::name($request->get('name'))->orderBy('id','asc')->groupBy('id')->paginate();
		// $asesores = Asesor::with('user')->where('user_id',)->orderBy('user_id','asc')->groupBy('user_id')->paginate();

		return view('users.index',compact('users'));


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('users.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		//
		//dd(\Input::get('establecimiento_id'));

		$request['password'] = \Hash::make($request->password);
		$user = User::create($request->all());
		if($request->establecimiento_id !=""){
			foreach(\Input::get('establecimiento_id') as $establecimiento_id){
				$asesor = new Asesor(['establecimiento_id' => $establecimiento_id]);
				$asesor = $user->asesor()->save($asesor);
			}
		}

		return redirect('users');

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
		$user = User::find($id);
		$asesorias =  Asesor::with('user')->where('user_id',$user->id)->get();

		
		//dd($asesorias);
		return view('users.edit',compact('asesorias','user'));
	}//

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserRequest $request)
	{
		//
		$user = User::with('asesor')->find($id);
		$request['password'] = $user->updatePassword($request->password);
		$user->update($request->all());
		//dd($user->asesor);
		
		if( $user->asesor() != null ){
			$asesorias = Asesor::where('user_id',$user->id);
			$asesorias->delete();
		}

		if($request->establecimiento_id !=""){
			foreach(\Input::get('establecimiento_id') as $establecimiento_id){
				$asesor = new Asesor(['establecimiento_id' => $establecimiento_id]);
				$asesor = $user->asesor()->save($asesor);	
			}
	    }

		return redirect('users');
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
		$user = User::with('asesor')->find($id);
		$asesorias = Asesor::where('user_id',$user->id);
		$asesorias->delete();

		if($user->type != "1"){
			$user->delete();
		}

		return redirect('users');
	}

}
