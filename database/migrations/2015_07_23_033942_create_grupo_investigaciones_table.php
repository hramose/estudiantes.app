<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoInvestigacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_investigaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('codigoCV')->nullable();
			$table->string('pregunta')->nullable();
			$table->enum('linea',['a','b']);
			$table->enum('red',['1','2']);
			$table->integer('establecimiento_id')->unsigned();
			$table->timestamps();

			$table->foreign('establecimiento_id')
				->references('id')->on('establecimientos')
				->onDelete('cascade')
				->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_investigaciones');
	}

}
