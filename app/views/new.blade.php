<!DOCTYPE html>
<html>
<head>
	<title>Nueva Operacion</title>
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/crearInput.js"></script>
	<script>

    $(document).on('ready',alerta);
    function alerta(){
    $(function(){
             var conceptos = new Array();
             @foreach ($conceptos as $concepto)
         	conceptos.push('{{$concepto->nombre}}');
         	@endforeach
              $(".concepto").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
                source: conceptos //Le decimos que nuestra fuente es el arreglo
              });
           });
    }
    $(document).on('ready',boton);
    function boton(){
        $('#cargar').on('click',alerta);
    }
	</script>
</head>
<body>
    {{Auth::User()->nombre}}
	<form action="operacion/create/{{$clientes->id}}/{{Auth::User()->id}}" method="get">
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
			<tr id="field">
				<td><label for="concepto">Concepto</label></td>
				<td>
					<input type="text" class="concepto" name="concepto">
				</td>
				<td><input type="button" value="Nuevo concepto" onclick="crear(this)" id="cargar"></td>
			</tr>
			<tr>
				<td><button>Guardar</button></td>
				<td><button>Cancelar</button></td>
			</tr>			
		</table>
	</form>
	
</body>
</html>