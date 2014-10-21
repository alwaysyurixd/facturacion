<!DOCTYPE html>
<html>
<head>
	<title>Nueva Operacion</title>
</head>
<body>
	<form action="{{url('operacion/create')}}" method="get">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1>Nueva Operacion</h1></td>
			</tr>
			<tr>
				<td><label for="dni">DNI:</label></td>
				<td><input type="text" name="dni" value="{{$clientes->dni}}" disabled></td>
			</tr>
			<tr>
				<td><label for="nombre">Nombre:</label></td>
				<td><input type="text" name="nombre" value="{{$clientes->nombre_cliente}}" disabled></td>
			</tr>
			<tr>
				<td><label for="apellido_p">Apellido paterno:</label></td>
				<td><input type="text" name="apellido_p" value="{{$clientes->apellido_paterno}}" disabled></td>
			</tr>	
			<tr>
				<td><label for="apellido_m">Apellido materno:</label></td>
				<td><input type="text" name="apellido_m" value="{{$clientes->apellido_materno}}" disabled></td>
			</tr>
			<tr>
				<td><label for="facultad">Facultad:</label></td>
				<td><input type="text" name="escuela" value="{{$clientes->nombre}}" disabled></td>
			</tr>
			<tr>
				<td><label for="escuela">Escuela:</label></td>
				<td><input type="text" name="escuela" value="{{$clientes->nombre_escuela}}" disabled></td>
			</tr>
			<tr>
				<td><label for="concepto">Concepto</label></td>
				<td>
					<select name="concepto">
						<option>--Seleccione un opción--</option>
						@foreach ($conceptos as $concepto) 
						<option value="{{$concepto->concepto_id}}">{{$concepto->nombre}}</option>			
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td><button>Guardar</button></td>
				<td><button>Cancelar</button></td>
			</tr>			
		</table>
	</form>
	
</body>
</html>