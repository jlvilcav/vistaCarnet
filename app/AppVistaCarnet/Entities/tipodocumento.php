<?php
namespace AppVistaCarnet\Entities;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class tipodocumento extends \Eloquent implements UserInterface, RemindableInterface{
	use UserTrait, RemindableTrait;
	/**
	*the database table used by the model
	*
	*@var array
	*/
	protected $hidden = array('password','remember_token');
}