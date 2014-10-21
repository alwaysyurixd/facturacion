<?php

class Cliente extends \Eloquent {
	protected $table = 'clientes';

	public function escuela(){
		return $this->belongsTo('escuela');
	}
	public function operacion(){
		return $this->hasMany('operacion');
	}
}