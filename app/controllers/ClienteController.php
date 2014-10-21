<?php

class ClienteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /cliente
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cliente/create
	 *
	 * @return Response
	 */
	public function getCreate($id_facultad)
	{
		$facultad = Facultad::find($id_facultad);
		$cliente = new Cliente;
		$cliente->nombre_cliente = 'yuri';
		$cliente->apellido_paterno = 'carranza';
		$cliente->apellido_materno = 'carranza';
		$cliente->imagen = 'imagen.jpg';
		$cliente->facultad()->associate($facultad);
		$cliente->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cliente
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /cliente/{id}
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
	 * GET /cliente/{id}/edit
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
	 * PUT /cliente/{id}
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
	 * DELETE /cliente/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}