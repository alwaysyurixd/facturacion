<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ConceptoTableSeeder');
		$this->call('FacultadTableSeeder');
		$this->call('TrabajadorTableSeeder');
		$this->call('EscuelaTableSeeder');
		$this->call('ClienteTableSeeder');
	}

}
