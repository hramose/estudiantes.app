<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Municipio;
use App\Establecimiento;
use App\GrupoInvestigacion;
use App\Persona;
use App\Participante;
use App\Asesor;



use Faker\Factory as Faker;

class MunicipioTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{	
		$faker = Faker::create();

		for($i = 0; $i < 30; $i++)
		{

			$municipio = Municipio::create([
				'nombre'	=> 	$faker->unique()->city,
				'nodo' 		=>	$faker->numberBetween($min = 1, $max = 3)

				]);

		}

		for($i = 0; $i < 5; $i++)
		{

				Establecimiento::create([
				'nombre'		=> 	$faker->unique()->company,
				'dane' 			=>	$faker->unique()->swiftBicNumber,
				'municipio_id' 	=> 	$faker->numberBetween($min = 1, $max = 5)
				]);

		}


		for($i = 0; $i < 5; $i++)
		{

				GrupoInvestigacion::create([
				'nombre'				=> 	$faker->unique()->streetName,
				'codigoCV' 				=>	$faker->unique()->buildingNumber,
				'establecimiento_id' 	=> 	$faker->numberBetween($min = 1, $max = 5)
				]);

		}
		for($i = 0; $i < 5; $i++)
		{

				$personas = Persona::create([
								'documento'			=> 	$faker->unique()->randomNumber($nbDigits = NULL),
								'tipoDocumento' 	=>	'TI',
								'nombre' 			=> 	$faker->firstName,
								'apellido'			=>	$faker->lastName,
								'sexo'				=>	'F',
								'telefono'			=>	$faker->phoneNumber,
								'correo'			=>	$faker->freeEmail,
								'lugarNacimiento'	=> 	$faker->city,
								'fechaNacimiento'	=>	$faker->date($format = 'Y-m-d', $max = 'now'),
								'observaciones'		=>	$faker->sentence($nbWords = 6)
							]);

				 Participante::create([
				 	'persona_id'			=>	$personas->id,
				 	'establecimiento_id'	=>	$faker->numberBetween($min = 1, $max = 5),
				 	'tipo'					=>	'estudiante'

					]);

				Asesor::create([
					'user_id' 				=>	'1',
					'establecimiento_id' 	=>	$i + 1
					]);

		}



	}
	// $this->call('UserTableSeeder');
}
