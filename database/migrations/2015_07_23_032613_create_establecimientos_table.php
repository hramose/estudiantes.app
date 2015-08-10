<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('establecimientos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('dane')->nullable();
			$table->integer('municipio_id')->unsigned();
			$table->timestamps();


			$table->foreign('municipio_id')
				->references('id')->on('municipios')
				->onDelete('cascade')
				->onUpdate('cascade');				;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('establecimientos');
	}

}
