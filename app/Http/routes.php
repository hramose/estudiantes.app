<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Resource('participantes','ParticipanteController');
Route::get('ajax-gi','GrupoInvestigacionController@ajax_gi');
Route::get('ajax-mun','MunicipioController@ajax_mun');
Route::get('ajax-ee','EstablecimientoController@ajax_ee');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
        // can only access this if type == A
        resource('municipios','MunicipioController');
        resource('establecimientos','EstablecimientoController');
        resource('grupo_investigaciones','GrupoInvestigacionController');
        resource('users','UserController');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
