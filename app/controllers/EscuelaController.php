<?php

class EscuelaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /escuela
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$escuelas = Escuela::all();
		foreach ($escuelas as $escuela) {
			var_dump($escuela->nombre_escuela);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /escuela/create
	 *
	 * @return Response
	 */
	public function getCreate($id_facultad)
	{
		$facultad = Facultad::find($id_facultad);
		$escuela = new Escuela;
		$escuela->nombre_escuela = 'Ingeniería de Sistemas';		
		$escuela->facultad()->associate($facultad);
		$escuela->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /escuela
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /escuela/{id}
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
	 * GET /escuela/{id}/edit
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
	 * PUT /escuela/{id}
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
	 * DELETE /escuela/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}