<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipodocumentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creando esquema tipodocumento
		Schema::create('tipodocumento', function(Blueprint $table)
			{
				$table->bigIncrements('idx')->unsigned();
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
