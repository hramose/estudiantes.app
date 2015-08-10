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
			$table->string('telefono')->nullable();
			$table->string('correo')->nullable();
			$table->date('fechaNacimiento');
			$table->string('observaciones',1000)->nullable();
			$table->timestamps();
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
