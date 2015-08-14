<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('persona_id')->unsigned();
			$table->integer('convocatoria_id')->unsigned();
			$table->string('hospedaje');
			$table->string('desplazamiento');
			$table->timestamps();

			$table->foreign('persona_id')->references('id')->on('personas')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('convocatoria_id')->references('id')->on('convocatorias')->onUpdate('cascade');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participantes');
	}

}
