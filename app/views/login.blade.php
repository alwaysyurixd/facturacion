<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<form action="ingreso" method="POST">
	@if(Session::has('login_errors'))
	<span class="label label-danger">Usuario o contraseña incorrecta</span>
	@endif
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1>Login</h1></td>
			</tr>
			<tr>
				<td><label for="usuario">Usuario:</label></td>
				<td><input type="text" name="usuario"></td>			
			</tr>
			<tr>
				<td><label for="password">Contraseña:</label></td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button>Ingresar</button></td>
			</tr>
		</table>
	</form>
</body>
</html>