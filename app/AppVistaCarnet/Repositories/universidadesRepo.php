<?php

namespace AppVistaCarnet\Repositories;
use AppVistaCarnet\Entities\universidades;

class universidadesRepo extends BaseRepo
{
	public function getmodel(){
		return new universidades;
	}
	public function getAll(){
		return universidades::all();
	}
	public function find($id){
		return universidades::find($id);
	}
}