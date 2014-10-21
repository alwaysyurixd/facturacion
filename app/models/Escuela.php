<?php

class Escuela extends \Eloquent {
	protected $table = 'escuelas';

	public function facultad(){
		return $this->belongsTo('facultad');
	}
	public function cliente(){
		return $this->hasMany('cliente');
	}
}