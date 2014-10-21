<?php

class Concepto extends \Eloquent {
	protected $table = 'conceptos';
	public $timestamps = false;
	public function operacion(){
		return $this->belongsToMany('operacion');
	}
}