<?php 
	class FacultadTableSeeder extends Seeder{
		public function run(){
			DB::table('facultades')->delete();
			Facultad::create(array(
				'id'=>1,
				'nombre'=>'Ingeniería'
				));
			Facultad::create(array(
				'id'=>2,
				'nombre'=>'Educación'
				));
		}
	}