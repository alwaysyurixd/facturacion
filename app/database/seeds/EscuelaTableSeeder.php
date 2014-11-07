<?php 
	class EscuelaTableSeeder extends Seeder{
		public function run(){
			DB::table('escuelas')->delete();
			Escuela::create(array(
				'id'=>1,
				'nombre_escuela'=>'Ingeniería de Sistemas',
				'facultad_id'=>1
				));
			Escuela::create(array(
				'id'=>2,
				'nombre_escuela'=>'Ingeniería industrial',
				'facultad_id'=>1
				));
			Escuela::create(array(
				'id'=>3,
				'nombre_escuela'=>'Educación inicial',
				'facultad_id'=>2
				));		
		}
	}