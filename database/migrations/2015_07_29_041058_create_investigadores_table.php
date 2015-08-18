<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('investigadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('participante_id')->unsigned();
			$table->integer('grupoInvestigacion_id')->unsigned();
			$table->enum('rol',['lider','tesorero','relator-secretario','investigador','acompanante','coinvestigador']);
			$table->string('grado')->nullable();
			$table->timestamps();

			$table->foreign('grupoInvestigacion_id')
				->references('id')->on('grupo_investigaciones')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->foreign('participante_id')
				->references('id')->on('participantes')
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
		Schema::drop('investigadores');
	}

}
