@extends('layout')
@section('content')
<form action="operacion" method="post">
	<label for="dni">DNI</label>
	<input type="number" name="dni">
	<button>Enviar</button>
</form>
@stop