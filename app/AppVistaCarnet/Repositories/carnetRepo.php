<?php

namespace AppVistaCarnet\Repositories;
use AppVistaCarnet\Entities\carnet;

class carnetRepo extends BaseRepo
{
	public function getModel(){
		return new carnet;
	}
	public function getAll(){
		return carnet::all();
	}
	public function find($id){
		return carnet::find($id);
	}
	public function verCarnet($idtipdoc,$numdoc){

		$verCarne = \DB::table('carnet')
			->join('universidades','carnet.coduniversidad','=','universidades.coduniversidad')
			->select('carnet.*','universidades.*')
			->where('carnet.idxtipodoc','=',$idtipdoc)
			->where('carnet.numdocumento','=',$numdoc)
			->get();

		return $verCarne;

	}
	public function getCarnet($id){
		$vercarne = \DB::table('carnet')
			->join('universidades','carnet.coduniversidad','=','universidades.coduniversidad')
			->select('carnet.*','universidades.*')
			->where('carnet.codalumno','=',$id)
			->get();

		return $vercarne;
	}

	public function mostrarForm(){
		return \View::make('Carnet');
	}

}