<?php

namespace AppVistaCarnet\Repositories;
use AppVistaCarnet\Entities\tipodocumento;

class tipoDocumentoRepo extends BaseRepo
{
	public function getModel(){
		return new tipodocumento;
	}
	public function getall(){
		return tipodocumento::all();
	}
	public function find($id){
		return tipodocumento::find($id);
	}
	public function listaCombo(){
		$obTipDoc = new tipoDocumentoRepo;
		$tipDocList = \DB::table('tipodocumento')
							->select('idx','descripcion')
							->where('activo','=',1)
							->get();
		return $tipDocList;
	}
}