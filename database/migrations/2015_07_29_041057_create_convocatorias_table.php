<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('convocatorias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->enum('componente',['formacion','investigacion','socializacion']);
			$table->date('fechaCierre');
			$table->string('cupo');
			$table->enum('ruta',['1','2','3']);
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
		Schema::drop('convocatorias');
	}

}
