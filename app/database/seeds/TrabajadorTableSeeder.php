<?php 
	class TrabajadorTableSeeder extends Seeder{
		public function run(){
			DB::table('trabajadores')->delete();
			Trabajador::create(array(
				'nombre'=>'Paolo',
				'apellidos'=>'Chumpitazi Huapaya',
				'usuario'=>'paolo',
				'password'=>'123'
				));
			Trabajador::create(array(
				'nombre'=>'Manuel',
				'apellidos'=>'Alor Leiva',
				'usuario'=>'alor',
				'password'=>'123'
				));		
		}
	}