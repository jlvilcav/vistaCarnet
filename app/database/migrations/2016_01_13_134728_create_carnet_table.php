<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarnetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creando esquema de carnet
		Schema::create('carnet', function(Blueprint $table)
			{
				$table->bigIncrements("idx");
				$table->string("coduniversidad",4);
				$table->string("codalumno",15);
				$table->string("appaterno",60);
				$table->string("apmaterno",60);
				$table->string("nombre",80);
				$table->bigInteger("idxtipodoc")->unsigned();
				$table->string("numdocumento",20);
				$table->string("facultad",100);
				$table->string("nomfacultad",100);
				$table->string("carrera",100);
				$table->string("nomcarr",100);
				$table->char("solregular",1);
				$table->date("fechaemiregular");
				$table->char("solduplicado",1);
				$table->date("fechaemiduplicado");
				$table->char("solcorrecion",1);
				$table->date("fechaemicorrecion");
				$table->char("activo",1);
				$table->foreign('idxtipodoc')->references('idx')->on('tipodocumento');

				
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
