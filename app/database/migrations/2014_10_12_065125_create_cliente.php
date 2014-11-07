<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCliente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facultades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->timestamps();
		});
		
		Schema::create('escuelas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_escuela');
			$table->integer('facultad_id')->unsigned();
			$table->foreign('facultad_id')->references('id')->on('facultades')->onDelete('cascade');
			$table->timestamps();
		});
		Schema::create('trabajadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellidos');
			$table->string('usuario')->unique();
			$table->string('password');			
			$table->timestamps();
		});
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('dni')->unique();
			$table->string('nombre_cliente');
			$table->string('apellido_paterno');
			$table->string('apellido_materno');
			$table->string('imagen');
			$table->integer('escuela_id')->unsigned();
			$table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
			$table->timestamps();
		});
		Schema::create('conceptos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->decimal('importe_alumno');
			$table->decimal('importe_otros');
		});
		Schema::create('operaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('codigo')->unique();
			$table->integer('trabajador_id')->unsigned();
			$table->foreign('trabajador_id')->references('id')->on('trabajadores')->onDelete('cascade');
			$table->integer('cliente_id')->unsigned();
			$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
			$table->timestamps();
		});
		Schema::create('concepto_operacion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('operacion_id')->unsigned();
			$table->foreign('operacion_id')->references('id')->on('operaciones')->onDelete('cascade');
			$table->integer('concepto_id')->unsigned();
			$table->foreign('concepto_id')->references('id')->on('conceptos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facultades');
		Schema::drop('escuelas');
		Schema::drop('clientes');			
		Schema::drop('trabajadores');
		Schema::drop('conceptos');
		Schema::drop('operaciones');
		Schema::drop('concepto_operacion');
	}

}
