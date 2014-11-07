<?php

class ConceptoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /concepto
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /concepto/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$concepto = new Concepto;
		$concepto->nombre = Input::get('nombre');
		$concepto->importe_alumno = Input::get('importe_alumnos');
		$concepto->importe_otros = Input::get('importe_otros');
		$concepto->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /concepto
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /concepto/{id}
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
	 * GET /concepto/{id}/edit
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
	 * PUT /concepto/{id}
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
	 * DELETE /concepto/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}