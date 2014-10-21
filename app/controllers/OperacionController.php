<?php

class OperacionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /operacion
	 *
	 * @return Response
	 */
	public function postIndex()
	{
		$dni = Input::get('dni');
		$cliente = DB::table('clientes')
				->join('escuelas','clientes.escuela_id','=','escuelas.escuela_id')->where('clientes.dni','=',$dni)
				->join('facultades','escuelas.facultad_id','=','facultades.facultad_id')
				->first();
		$conceptos = DB::table('conceptos')->get();
		return View::make('new')->with(array('clientes' => $cliente,'conceptos' => $conceptos ));
		//var_dump($conceptos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /operacion/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /operacion
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /operacion/{id}
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
	 * GET /operacion/{id}/edit
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
	 * PUT /operacion/{id}
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
	 * DELETE /operacion/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}