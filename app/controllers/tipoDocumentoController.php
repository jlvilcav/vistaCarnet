<?php

use AppVistaCarnet\Repositories\tipoDocumentoRepo;

class tipoDocumentoController extends BaseController
{
	protected $tipoDocumentoRepo;
	public function __construct(tipoDocumentoRepo $tipoDocumentoRepo){
		$this->tipoDocumentoRepo = $tipoDocumentoRepo;
	}
	public function index(){
		return $this->tipoDocumentoRepo->getAll();
	}
	public function add(){
		return $this->tipoDocumentoRepo->add();
	}
	public function listaCombo(){
		return $this->tipoDocumentoRepo->listaCombo();
	}
}