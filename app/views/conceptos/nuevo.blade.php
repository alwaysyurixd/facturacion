@extends('layout')
@section('content')
<form action="concepto/create" method="get">
    <table>
        <tr>
            <td><label for="nombre">Nombre</label></td>
            <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
            <td><label for="importe_alumnos">Importe alumnos:</label></td>
            <td><input type="number" name="importe_alumnos"></td>
        </tr>
            <td><label for="importe_otros">Importe otros:</label></td>
            <td><input type="number" name="importe_otros"></td>
        <tr>
            <td colspan="2"><button>Guardar</button></td>
        </tr>
    </table>
</form>
@stop