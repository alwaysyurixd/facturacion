<?php

class Trabajador extends \Eloquent {
	protected $table = 'trabajadores';

	public function operacion(){
		return $this->hasMany('operacion');
	}
}