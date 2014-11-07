<?php 
	class OperacionTableSeeder extends Seeder{
		public function run(){
			DB::table('operaciones')->delete();
			$operacion = Operacion::create(array(
				'operacion_id'=>1,
				'codigo'=>126,
				'trabajador_id'=>17,
				'cliente_id'=>1
				));
			Trabajador::create(array(
				'nombre'=>'Manuel',
				'apellidos'=>'Alor Leiva',
				'usuario'=>'alor',
				'password'=>'123'
				));		
		}
	}