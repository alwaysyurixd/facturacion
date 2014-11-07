<table>
    <tr>
        <td>Codigo</td><td>Cliente</td><td>Concepto</td><td>Monto</td>
    </tr>
    @foreach($operaciones as $operacion)
    <tr>
        <td>{{$operacion->codigo}}</td><td>{{$operacion->nombre_cliente}}</td><td>{{$operacion->nombre}}</td><td>{{$operacion->importe_alumno}}</td>
    </tr>
    @endforeach
</table>