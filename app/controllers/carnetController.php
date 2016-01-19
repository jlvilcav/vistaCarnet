<?php
use AppVistaCarnet\Repositories\carnetRepo;

class  carnetController extends BaseController
{
	protected $carnetRepo;
	public function __construct(carnetRepo $carnetRepo){
		$this->carnetRepo = $carnetRepo;
	}
	public function index(){
		return $this->carnetRepo->getall();
	}
	public function find($id){
		return $this->carnetRepo->find($id);
	}
	public function verCarnet($idtipdoc,$numdoc){
		return $this->carnetRepo->verCarnet($idtipdoc,$numdoc);
	}
	public function getCarnet($id){
		return $this->carnetRepo->getCarnet($id);
	}
	public function mostrarForm(){
		return $this->carnetRepo->mostrarForm();
	}
}
