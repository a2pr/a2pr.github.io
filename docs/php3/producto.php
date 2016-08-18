<?php
session_start();
include "cabecera.php";?>
<html>
	<head>
		<title>PHP 3 carrito de compra</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
	<nav>
		<ul>
			<li><a href="#">Bienvenid@<?php echo  $_SESSION['nombre'];?></a></li>
			<li><a href="index.php">Inicio</a></li>	
			<li><a href="cierre.php">Salir</a></li>
			
		</ul>
	</nav>
	<div class="cont">
	<form name="productos" action="validacion.php" method="post" enctype="multipart/form-data">
	<table class="iusu">
		<caption>Introduzca su usuario</caption>
	<tr>
		<td class="asignacion"><b>Imagen:</b></td>
		<td class=><input name="img" type="file"></td>
	</tr>
	<tr>
		<td class="asignacion"><b>Nombre:</b></td>
		<td class="entrada"><input class="inen" name="nombre" type="text" placeholder="producto"></td>
	</tr>
	<tr>
		<td class="asignacion"><b>Precio:</b></td>
		<td class="entrada"><input class="inen" name="precio" type="text" placeholder="1000" value=""></td>
	</tr>
	<tr>
		<td class="asignacion"><b>Cantidad:</b></td>
		<td class="entrada"><input class="inen" name="cantidad" type="text" placeholder="2"></td>
	</tr>
	<tr>
		<td class="asignacion"><b>Descripcion:</b></td>
		<td class="entrada"><textarea name="descripcion"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="hidden" name="val" value="3">
			<input class="click" type="submit" value="Enviar">&nbsp;&nbsp;&nbsp;<input class="click" type="reset" value="Borrar"></td>
	</tr>
	</table>
	</form>
	</div>
	</body>
</html>