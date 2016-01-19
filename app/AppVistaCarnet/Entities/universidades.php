<?php
namespace AppVistaCarnet\Entities;

class universidades extends \Eloquent {
	
	protected $table = 'universidades';
	protected $hidden = array('password','remember_token');
}