<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creando esquema universidades
		Schema::create('universidades', function(Blueprint $table)
			{
				$table->bigIncrements("idx");
				$table->string("coduniversidad",4);
				$table->string("descripcion",50);
				$table->string("abreviatura",20);
				$table->char("activo",1);
				
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
