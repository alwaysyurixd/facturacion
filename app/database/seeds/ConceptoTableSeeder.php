<?php 
	class ConceptoTableSeeder extends Seeder{
		public function run(){
			DB::table('conceptos')->delete();
			Concepto::create(array(
				'nombre'=>'Derecho de trámite',
				'importe_alumno'=>'1',
				'importe_otros'=>'2'
				));
			Concepto::create(array(
				'nombre'=>'Constancia de estudios',
				'importe_alumno'=>'15',
				'importe_otros'=>'20'
				));			
		}
	}