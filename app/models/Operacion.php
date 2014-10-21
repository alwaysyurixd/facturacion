<?php

class Operacion extends \Eloquent {
	protected $table = 'operaciones';

	public function trabajador(){
		return $this->belongsTo('trabajador');
	}
	public function cliente(){
		return $this->belongsTo('cliente');
	}
	public function concepto(){
		return $this->belongsToMany('concepto');
	}
}