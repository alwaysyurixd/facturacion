<?php

class Facultad extends Eloquent {
	protected $table = 'facultades';

	public function escuela(){
		return $this->hasMany('escuela');
	}
}