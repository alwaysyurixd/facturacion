<?php

class FacultadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /facultad
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$facultades = Facultad::all();
		foreach ($facultades as $facultad) {
			var_dump($facultad->nombre);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /facultad/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$facultad = new Facultad;
		$facultad->nombre = 'Educacion';
		$facultad->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /facultad
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /facultad/{id}
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
	 * GET /facultad/{id}/edit
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
	 * PUT /facultad/{id}
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
	 * DELETE /facultad/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}