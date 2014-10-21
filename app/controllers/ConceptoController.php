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
		$concepto->nombre = 'derecho de trámite';
		$concepto->importe_alumno = 1.00;
		$concepto->importe_otros = 2.00;
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