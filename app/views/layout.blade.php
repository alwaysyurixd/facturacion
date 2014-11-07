<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
<?php $status=Session::get('status'); ?>
    @if($status=='ok_create')
    <div class="alert alert-success fade in">
    	<button class="close" data-dismiss="alert" type="button">x</button>
    	<i class="fa fa-check-square"></i>La operación se realizó con éxito.
    </div>
    @endif
    <a href="dni">Inicio</a>
    {{Auth::User()->nombre}}
    <a href="newConcepto">Nuevo concepto</a>
    <a href="logout">Cerrar Sesión</a>
	@yield('content')
</body>
</html>