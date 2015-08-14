<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('documento',50)->unique();
			$table->enum('tipoDocumento',['TI','CC','RC']);
			$table->string('nombre');
			$table->string('apellido');
			$table->enum('sexo',['M','F']);
			$table->string('telefono')->nullable();
			$table->string('correo')->nullable();
			$table->string('lugarNacimiento')->nullable();
			$table->date('fechaNacimiento');
			$table->string('observaciones',500)->nullable();
			$table->string('tipo');
			$table->string('grado')->nullable();
			$table->integer('establecimiento_id')->unsigned();
			$table->timestamps();


			$table->foreign('establecimiento_id')->references('id')->on('establecimientos')->onUpdate('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
