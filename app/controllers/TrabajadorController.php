<?php

class TrabajadorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /trabajador
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /trabajador/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$password='misterio';
		$trabajador = new Trabajador;
		$trabajador->nombre = 'Yuri';
		$trabajador->apellidos = 'Carranza Quispe';
		$trabajador->usuario = 'yuri';
		$trabajador->password = Hash::make($password);
		$trabajador->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /trabajador
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /trabajador/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /trabajador/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /trabajador/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /trabajador/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}