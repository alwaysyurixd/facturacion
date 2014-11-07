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
				->join('escuelas','clientes.id','=','escuelas.id')->where('clientes.dni','=',$dni)
				->join('facultades','escuelas.id','=','facultades.id')
				->first();
		$conceptos = DB::table('conceptos')->get();
		return View::make('new',array('clientes' => $cliente,'conceptos' => $conceptos ));
		//var_dump($conceptos);
	}
    public function getOperaciones()
    {
        $operaciones = DB::table('concepto_operacion')
                    ->join('conceptos','concepto_id','=','conceptos.id')
                    ->join('operaciones','operacion_id','=','operaciones.id')
                    ->join('clientes','cliente_id','=','clientes.id')
                    ->select('operaciones.codigo','clientes.nombre_cliente','conceptos.nombre','conceptos.importe_alumno')->get();
        //dd($operaciones);
        return View::make('operaciones')->with('operaciones',$operaciones);
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /operacion/create
	 *
	 * @return Response
	 */
	public function getCreate($id,$id_trabajador)
	{
        //$concepto_id = Concepto::where('nombre',$concepto)->get();
        $concepto = Input::get('concepto');
        $concepto_id = DB::table('conceptos')->where('nombre','=',$concepto)->pluck('id');
        $cliente_id = $id;
        $trabajador_id = $id_trabajador;
		$operacion = new Operacion;
		$operacion->codigo = rand(1000,10000);
		$operacion->trabajador_id = $trabajador_id;
		$operacion->cliente_id = $cliente_id;
		$operacion->save();
        //para insertar en la tabla pivot
        $operacion->concepto()->attach($concepto_id);
        return Redirect::to('dni')->with('status','ok_create');
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